<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Support\ContactForm;
use App\Support\ContactSpamFilter;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ContactController extends Controller
{
    public function send(Request $request, ContactSpamFilter $spamFilter): RedirectResponse
    {
        $botReason = $spamFilter->botReason($request);

        if ($botReason !== null) {
            $this->logBlocked($request, $botReason);

            return $this->accepted();
        }

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'company' => ['nullable', 'string', 'max:255'],
            'project_type' => ['required', 'string', Rule::in(ContactForm::PROJECT_TYPES)],
            'proposed_budget' => ['required', 'string', Rule::in(ContactForm::BUDGETS)],
            'project_description' => ['required', 'string', 'max:5000'],
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $validated = $validator->validated();
        $spamScore = $spamFilter->spamScore(
            $validated['name'],
            $validated['company'] ?? '',
            $validated['project_description'],
        );

        if ($spamScore >= ContactSpamFilter::SPAM_SCORE) {
            $this->logBlocked($request, 'spam content', $spamScore);

            return $this->accepted();
        }

        try {
            $recipientEmail = env('MAIL_TO_ADDRESS', 'admin@aloflux.com');

            Mail::to($recipientEmail)
                ->send(new ContactFormMail($validated));

            Log::info('Contact form email sent successfully', [
                'to' => $recipientEmail,
                'from' => $validated['email'],
                'name' => $validated['name'],
                'project_type' => $validated['project_type'],
            ]);

            return $this->accepted();
        } catch (Exception $e) {
            Log::error('Contact form error: '.$e->getMessage(), [
                'exception' => $e,
                'trace' => $e->getTraceAsString(),
            ]);

            return redirect()->route('home')
                ->with('error', 'Sorry, there was an error sending your message. Please try again later.')
                ->withInput()
                ->withFragment('contact');
        }
    }

    private function accepted(): RedirectResponse
    {
        return redirect()
            ->route('home')
            ->with('success', 'Thank you for your message! We will get back to you soon.')
            ->withFragment('contact');
    }

    private function logBlocked(Request $request, string $reason, ?int $score = null): void
    {
        $description = $request->input('project_description');

        Log::warning('Contact form submission blocked', [
            'reason' => $reason,
            'score' => $score,
            'ip' => $request->ip(),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'company' => $request->input('company'),
            'project_type' => $request->input('project_type'),
            'proposed_budget' => $request->input('proposed_budget'),
            'project_description' => is_string($description) ? mb_substr($description, 0, 500) : null,
        ]);
    }
}
