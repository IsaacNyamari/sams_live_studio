<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        /* Custom CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            background: #f4f6f9;
            padding: 40px 20px;
            line-height: 1.6;
        }

        /* Main Container */
        .email-wrapper {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        }

        /* Header Section */
        .email-header {
            background: linear-gradient(120deg, #1e3c72 0%, #2a5298 100%);
            padding: 35px 30px;
            text-align: center;
        }

        .logo {
            max-width: 140px;
            height: auto;
            margin-bottom: 15px;
        }

        /* Content Section */
        .email-body {
            padding: 40px 35px;
            background: #ffffff;
        }

        /* Greeting */
        .greeting {
            font-size: 24px;
            font-weight: 700;
            color: #1e3c72;
            margin-bottom: 20px;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }

        /* Message Content */
        .message-content {
            color: #4a5568;
            font-size: 16px;
            line-height: 1.7;
            margin: 20px 0;
        }

        .message-content p {
            margin-bottom: 15px;
        }

        /* Stats Cards */
        .stats-container {
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
            border-radius: 16px;
            padding: 25px;
            margin: 30px 0;
            text-align: center;
        }

        .stats-grid {
            display: flex;
            justify-content: space-around;
            gap: 20px;
            margin-top: 20px;
            flex-wrap: wrap;
        }

        .stat-item {
            text-align: center;
            flex: 1;
            min-width: 100px;
        }

        .stat-number {
            font-size: 32px;
            font-weight: 800;
            color: #2a5298;
            display: block;
            line-height: 1.2;
        }

        .stat-label {
            font-size: 13px;
            color: #64748b;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 600;
            margin-top: 8px;
        }

        .stat-icon {
            font-size: 28px;
            margin-bottom: 10px;
            display: inline-block;
        }

        /* Action Buttons */
        .action-buttons {
            margin: 35px 0 25px;
            text-align: center;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 12px 32px;
            background: linear-gradient(120deg, #1e3c72 0%, #2a5298 100%);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 15px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(30, 60, 114, 0.2);
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(30, 60, 114, 0.3);
        }

        .btn-secondary {
            background: transparent;
            color: #2a5298;
            border: 2px solid #2a5298;
            box-shadow: none;
        }

        .btn-secondary:hover {
            background: #2a5298;
            color: white;
        }

        /* Contact Info */
        .contact-info {
            background: #f8fafc;
            border-radius: 12px;
            padding: 20px;
            margin: 25px 0;
            text-align: center;
            border: 1px solid #e2e8f0;
        }

        .contact-icons {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-top: 15px;
            flex-wrap: wrap;
        }

        .contact-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #2a5298;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            transition: color 0.2s;
        }

        .contact-link:hover {
            color: #1e3c72;
            text-decoration: underline;
        }

        /* Divider */
        .divider {
            height: 2px;
            background: linear-gradient(90deg, transparent, #e2e8f0, transparent);
            margin: 30px 0;
        }

        /* Footer */
        .email-footer {
            background: #f8fafc;
            padding: 30px 35px;
            text-align: center;
            border-top: 1px solid #e2e8f0;
        }

        .footer-text {
            color: #64748b;
            font-size: 12px;
            line-height: 1.6;
        }

        .footer-links {
            margin: 15px 0;
        }

        .footer-links a {
            color: #2a5298;
            text-decoration: none;
            margin: 0 10px;
            font-size: 12px;
        }

        .footer-links a:hover {
            text-decoration: underline;
        }

        /* Responsive */
        @media (max-width: 480px) {
            .email-body {
                padding: 30px 20px;
            }

            .email-footer {
                padding: 25px 20px;
            }

            .stats-grid {
                flex-direction: column;
                gap: 20px;
            }

            .btn {
                width: 100%;
                justify-content: center;
            }

            .contact-icons {
                flex-direction: column;
                gap: 12px;
                align-items: center;
            }
        }
    </style>
</head>

<body>
    <div class="email-wrapper">
        <!-- Header -->
        <div class="email-header">
            <img class="logo" src="{{ asset('images/logos/sams_logo.png') }}" alt="{{ config('app.name') }}">
        </div>

        <!-- Body -->
        <div class="email-body">
            <div class="greeting">
                Hi {{ $name ?? 'there' }}! 👋
            </div>

            <!-- Dynamic Message Content -->
            <div class="message-content">
                {!! nl2br(e($messageContent)) !!}
            </div>

            <!-- Stats Section (Optional - appears if data exists) -->
            @if (isset($payments) || isset($bookings) || isset($calls))
                <div class="stats-container">
                    <div style="font-weight: 600; color: #1e3c72; margin-bottom: 15px;">Your Activity Summary</div>
                    <div class="stats-grid">
                        @if (isset($payments))
                            <div class="stat-item">
                                <div class="stat-icon">💰</div>
                                <span class="stat-number">{{ $payments }}</span>
                                <span class="stat-label">Payments</span>
                            </div>
                        @endif

                        @if (isset($bookings))
                            <div class="stat-item">
                                <div class="stat-icon">📅</div>
                                <span class="stat-number">{{ $bookings }}</span>
                                <span class="stat-label">Bookings</span>
                            </div>
                        @endif

                        @if (isset($calls))
                            <div class="stat-item">
                                <div class="stat-icon">📞</div>
                                <span class="stat-number">{{ $calls }}</span>
                                <span class="stat-label">Calls</span>
                            </div>
                        @endif
                    </div>
                </div>
            @endif

            <!-- Action Buttons -->
            @if (isset($actionUrl))
                <div class="action-buttons">
                    <a href="{{ $actionUrl }}" class="btn">
                        {{ $actionText ?? 'Take Action' }} →
                    </a>
                </div>
            @endif

            <!-- Contact Information -->
            <div class="contact-info">
                <div style="font-weight: 600; color: #1e3c72; margin-bottom: 10px;">Need Help?</div>
                <div class="contact-icons">
                    <a href="tel:{{ $phone ?? env('STUDIO_PHONE') }}" class="contact-link">
                        📞 {{ $phone ?? 'Call Us' }}
                    </a>
                    <a href="mailto:{{ $supportEmail ?? 'support@example.com' }}" class="contact-link">
                        ✉️ {{ $supportEmail ?? 'Email Support' }}
                    </a>
                </div>
            </div>

            <div class="divider"></div>

            <div class="message-content" style="font-size: 14px; color: #64748b;">
                Thanks for being with us!<br>
                <strong style="color: #1e3c72;">{{ config('app.name') }} Team</strong>
            </div>
        </div>

        <!-- Footer -->
        <div class="email-footer">
            <div class="footer-text">
                This email was sent to <a href="mailto:{{ $email }}"
                    style="color: #2a5298; text-decoration: none;">{{ $email }}</a>
            </div>
            <div class="footer-links">
                <a href="#">Unsubscribe</a>
                <span>•</span>
                <a href="#">Privacy Policy</a>
                <span>•</span>
                <a href="#">Terms of Service</a>
            </div>
            <div class="footer-text">
                © {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
            </div>
        </div>
    </div>
</body>

</html>
