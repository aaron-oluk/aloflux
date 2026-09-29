<?php

namespace App\Support;

use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class ContactSpamFilter
{
    public const MINIMUM_SECONDS = 3;

    public const SPAM_SCORE = 4;

    private const STRONG_PHRASES = [
        'viagra',
        'cialis',
        'casino',
        'porn',
        'payday',
        'replica watch',
        'online pharmacy',
        'guest post',
        'backlink',
        'dofollow',
        'do follow',
        'link building',
        'buy followers',
        'airdrop',
        'seo package',
        'domain authority',
        'broken link',
        'adult dating',
        'make money fast',
        'web traffic',
        'rank on google',
        'forex signal',
        'slot machine',
        'betting odds',
        'loan guaranteed',
        'crypto giveaway',
        'bitcoin doubler',
    ];

    public function botReason(Request $request): ?string
    {
        if ($this->honeypotFilled($request)) {
            return 'honeypot';
        }

        $loadedAt = $this->formLoadedAt($request);

        if ($loadedAt === null) {
            return 'invalid form time';
        }

        if ((now()->timestamp - $loadedAt) < self::MINIMUM_SECONDS) {
            return 'submitted too quickly';
        }

        return null;
    }

    public function spamScore(string $name, string $company, string $description): int
    {
        $score = 0;
        $haystack = strtolower($name.' '.$company.' '.$description);

        foreach (self::STRONG_PHRASES as $phrase) {
            $pattern = '/\b'.preg_quote($phrase, '/').'\b/i';

            if (preg_match($pattern, $haystack) === 1) {
                $score += self::SPAM_SCORE;
            }
        }

        if (preg_match('/https?:\/\/|www\./i', $name) === 1) {
            $score += self::SPAM_SCORE;
        }

        $links = preg_match_all('/https?:\/\/|www\./i', $description);
        if (is_int($links) && $links > 1) {
            $score += ($links - 1) * 2;
        }

        $gibberish = preg_match_all('/[bcdfghjklmnpqrstvwxyz]{8,}/i', $description);
        if (is_int($gibberish) && $gibberish >= 2) {
            $score += self::SPAM_SCORE;
        }

        $emails = preg_match_all('/\S+@\S+\.\S+/', $description);
        if (is_int($emails) && $emails > 2) {
            $score += self::SPAM_SCORE;
        }

        return $score;
    }

    public function isSpam(string $name, string $company, string $description): bool
    {
        return $this->spamScore($name, $company, $description) >= self::SPAM_SCORE;
    }

    private function honeypotFilled(Request $request): bool
    {
        $value = $request->input('leave_blank');

        if (is_string($value)) {
            return trim($value) !== '';
        }

        return $value !== null;
    }

    private function formLoadedAt(Request $request): ?int
    {
        $payload = $request->input('form_loaded_at');

        if (! is_string($payload) || $payload === '') {
            return null;
        }

        try {
            $loadedAt = Crypt::decrypt($payload);
        } catch (DecryptException) {
            return null;
        }

        if (! is_numeric($loadedAt)) {
            return null;
        }

        return (int) $loadedAt;
    }
}
