<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Inquiry from {{ $name }}</title>
</head>
<body style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; line-height: 1.6; color: #333333; margin: 0; padding: 0; background-color: #f4f4f7;">
    <table width="100%" cellpadding="0" cellspacing="0" style="background-color: #f4f4f7; padding: 40px 20px;">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0" style="max-width: 600px; width: 100%;">
                    <!-- Logo -->
                    <tr>
                        <td align="center" style="padding-bottom: 30px;">
                            <table cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="background-color: #FF6D00; width: 36px; height: 36px; border-radius: 6px; text-align: center; vertical-align: middle;">
                                        <span style="color: #ffffff; font-weight: bold; font-size: 18px;">A</span>
                                    </td>
                                    <td style="padding-left: 10px; font-size: 22px; font-weight: bold; color: #1A1A1A;">
                                        Aloflux
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Main Card -->
                    <tr>
                        <td style="background-color: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.08);">
                            <!-- Orange Top Bar -->
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="height: 4px; background-color: #FF6D00;"></td>
                                </tr>
                            </table>

                            <!-- Content -->
                            <table width="100%" cellpadding="0" cellspacing="0" style="padding: 40px 36px;">
                                <!-- Greeting -->
                                <tr>
                                    <td style="padding-bottom: 24px;">
                                        <p style="margin: 0; font-size: 16px; color: #555555;">Hi team,</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-bottom: 28px;">
                                        <p style="margin: 0; font-size: 16px; color: #555555;">
                                            You have a new inquiry from <strong style="color: #1A1A1A;">{{ $name }}</strong>@if($company) at <strong style="color: #1A1A1A;">{{ $company }}</strong>@endif. Here are the details:
                                        </p>
                                    </td>
                                </tr>

                                <!-- Message -->
                                <tr>
                                    <td style="padding-bottom: 32px;">
                                        <table width="100%" cellpadding="0" cellspacing="0" style="background-color: #f8f9fa; border-radius: 8px; border-left: 4px solid #FF6D00;">
                                            <tr>
                                                <td style="padding: 24px;">
                                                    <p style="margin: 0; font-size: 15px; color: #333333; line-height: 1.7; white-space: pre-wrap;">{{ $messageText }}</p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>

                                <!-- Contact Details -->
                                <tr>
                                    <td style="padding-bottom: 32px;">
                                        <table width="100%" cellpadding="0" cellspacing="0" style="border-top: 1px solid #e9ecef; padding-top: 24px;">
                                            <tr>
                                                <td style="padding-top: 24px; padding-bottom: 6px;">
                                                    <p style="margin: 0; font-size: 12px; font-weight: 600; color: #999999; text-transform: uppercase; letter-spacing: 1px;">Sender Details</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-top: 12px;">
                                                    <table cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td style="padding-right: 8px; vertical-align: middle; color: #FF6D00; font-size: 16px;">&#9993;</td>
                                                            <td style="font-size: 15px; color: #333333;">
                                                                <a href="mailto:{{ $email }}" style="color: #FF6D00; text-decoration: none;">{{ $email }}</a>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            @if($company)
                                            <tr>
                                                <td style="padding-top: 8px;">
                                                    <table cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td style="padding-right: 8px; vertical-align: middle; color: #FF6D00; font-size: 16px;">&#9881;</td>
                                                            <td style="font-size: 15px; color: #333333;">{{ $company }}</td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            @endif
                                        </table>
                                    </td>
                                </tr>

                                <!-- Reply Button -->
                                <tr>
                                    <td align="center" style="padding-bottom: 8px;">
                                        <a href="mailto:{{ $email }}?subject=Re: Your inquiry to Aloflux" style="display: inline-block; background-color: #FF6D00; color: #ffffff; text-decoration: none; font-weight: 600; font-size: 15px; padding: 14px 32px; border-radius: 8px;">
                                            Reply to {{ $name }}
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="padding-top: 30px; text-align: center;">
                            <p style="margin: 0 0 6px 0; font-size: 13px; color: #999999;">
                                This message was sent via the contact form on <a href="https://aloflux.com" style="color: #FF6D00; text-decoration: none;">aloflux.com</a>
                            </p>
                            <p style="margin: 0; font-size: 12px; color: #bbbbbb;">
                                &copy; {{ date('Y') }} Aloflux. All rights reserved.
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
