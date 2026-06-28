<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Project Inquiry from {{ $name }}</title>
</head>
<body style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; line-height: 1.6; color: #1a1a1a; margin: 0; padding: 0; background-color: #f0f0f0;">
    <table width="100%" cellpadding="0" cellspacing="0" style="background-color: #f0f0f0; padding: 48px 20px;">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0" style="max-width: 600px; width: 100%;">

                    <!-- Header -->
                    <tr>
                        <td style="background-color: #1A1A1A; border-radius: 12px 12px 0 0; padding: 28px 40px;">
                            <table cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="background-color: #FF6D00; width: 32px; height: 32px; border-radius: 6px; text-align: center; vertical-align: middle;">
                                        <span style="color: #ffffff; font-weight: 800; font-size: 16px; line-height: 32px;">A</span>
                                    </td>
                                    <td style="padding-left: 10px; font-size: 18px; font-weight: 700; color: #ffffff; letter-spacing: -0.3px;">
                                        Aloflux
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Body -->
                    <tr>
                        <td style="background-color: #ffffff; padding: 40px 40px 32px; border-radius: 0 0 12px 12px;">

                            <!-- Intro -->
                            <p style="margin: 0 0 6px 0; font-size: 22px; font-weight: 700; color: #1A1A1A;">New project inquiry</p>
                            <p style="margin: 0 0 32px 0; font-size: 15px; color: #666666;">
                                From <strong style="color: #1A1A1A;">{{ $name }}</strong>@if($company), <strong style="color: #1A1A1A;">{{ $company }}</strong>@endif
                            </p>

                            <!-- Divider -->
                            <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom: 28px;">
                                <tr><td style="height: 1px; background-color: #ebebeb;"></td></tr>
                            </table>

                            <!-- Project meta -->
                            <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom: 28px;">
                                <tr>
                                    <td width="50%" style="padding-right: 12px; vertical-align: top;">
                                        <p style="margin: 0 0 4px 0; font-size: 11px; font-weight: 600; color: #999999; text-transform: uppercase; letter-spacing: 0.8px;">Project Type</p>
                                        <p style="margin: 0; font-size: 15px; font-weight: 600; color: #1A1A1A;">{{ $projectType }}</p>
                                    </td>
                                    <td width="50%" style="padding-left: 12px; vertical-align: top;">
                                        <p style="margin: 0 0 4px 0; font-size: 11px; font-weight: 600; color: #999999; text-transform: uppercase; letter-spacing: 0.8px;">Proposed Budget</p>
                                        <p style="margin: 0; font-size: 15px; font-weight: 600; color: #1A1A1A;">{{ $proposedBudget }}</p>
                                    </td>
                                </tr>
                            </table>

                            <!-- Divider -->
                            <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom: 28px;">
                                <tr><td style="height: 1px; background-color: #ebebeb;"></td></tr>
                            </table>

                            <!-- Project description -->
                            <p style="margin: 0 0 12px 0; font-size: 11px; font-weight: 600; color: #999999; text-transform: uppercase; letter-spacing: 0.8px;">Project Description</p>
                            <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom: 32px;">
                                <tr>
                                    <td style="background-color: #f8f8f8; border-radius: 8px; padding: 20px 24px;">
                                        <p style="margin: 0; font-size: 15px; color: #333333; line-height: 1.75; white-space: pre-wrap;">{{ $projectDescription }}</p>
                                    </td>
                                </tr>
                            </table>

                            <!-- Divider -->
                            <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom: 28px;">
                                <tr><td style="height: 1px; background-color: #ebebeb;"></td></tr>
                            </table>

                            <!-- Contact details -->
                            <p style="margin: 0 0 12px 0; font-size: 11px; font-weight: 600; color: #999999; text-transform: uppercase; letter-spacing: 0.8px;">Contact Details</p>
                            <table cellpadding="0" cellspacing="0" style="margin-bottom: 32px;">
                                <tr>
                                    <td style="padding-bottom: 6px; font-size: 15px; color: #333333;">
                                        <strong style="color: #1A1A1A;">Name:</strong> {{ $name }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-bottom: 6px; font-size: 15px; color: #333333;">
                                        <strong style="color: #1A1A1A;">Email:</strong>
                                        <a href="mailto:{{ $email }}" style="color: #FF6D00; text-decoration: none;">{{ $email }}</a>
                                    </td>
                                </tr>
                                @if($company)
                                <tr>
                                    <td style="font-size: 15px; color: #333333;">
                                        <strong style="color: #1A1A1A;">Company:</strong> {{ $company }}
                                    </td>
                                </tr>
                                @endif
                            </table>

                            <!-- CTA -->
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td>
                                        <a href="mailto:{{ $email }}?subject=Re: Your {{ $projectType }} inquiry" style="display: inline-block; background-color: #1A1A1A; color: #ffffff; text-decoration: none; font-weight: 600; font-size: 14px; padding: 13px 28px; border-radius: 8px; letter-spacing: 0.1px;">
                                            Reply to {{ $name }}
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="padding: 24px 0; text-align: center;">
                            <p style="margin: 0 0 4px 0; font-size: 12px; color: #aaaaaa;">
                                Submitted via <a href="https://aloflux.com" style="color: #aaaaaa; text-decoration: underline;">aloflux.com</a>
                            </p>
                            <p style="margin: 0; font-size: 12px; color: #aaaaaa;">&copy; {{ date('Y') }} Aloflux LLC</p>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
</body>
</html>
