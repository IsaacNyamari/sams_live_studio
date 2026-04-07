<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Request</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f6f9fc;
        }

        .wrapper {
            width: 100%;
            table-layout: fixed;
            background-color: #f6f9fc;
            padding-bottom: 40px;
        }

        .main {
            background-color: #ffffff;
            margin: 0 auto;
            width: 100%;
            max-width: 600px;
            border-spacing: 0;
            font-family: sans-serif;
            color: #4a4a4a;
        }

        .button {
            background-color: #007bff;
            color: #ffffff;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            display: inline-block;
        }
    </style>
</head>

<body>
    <center class="wrapper">
        <table class="main" width="100%">
            <!-- Header -->
            <tr>
                <td style="padding: 30px; text-align: center; border-bottom: 1px solid #eeeeee;">
                    <h1 style="margin: 0; font-size: 24px;">New Payment</h1>
                </td>
            </tr>
            <!-- Body -->
            <tr>
                <td style="padding: 30px;">
                    <p>Hi Admin,</p>
                    <p>This is a payment of <strong>{{ $amount }}</strong> made on <strong>
                            {{ date('Y:M:d:h:i:s') }} by {{ $name }}
                        </strong>.</p>
                    <table width="100%" style="margin: 20px 0; border-collapse: collapse;">
                        <tr>
                            <td style="padding: 10px; border-bottom: 1px solid #eeeeee;">Amount</td>
                            <td align="right" style="padding: 10px; border-bottom: 1px solid #eeeeee;">
                                {{ $amount }}
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 10px; font-weight: bold;">Total Paid</td>
                            <td align="right" style="padding: 10px; font-weight: bold;">{{ $amount }}</td>
                        </tr>
                    </table>
                    <center><a href="{{ route('dashboard.payments') }}" class="button">View Payments</a></center>
                </td>
            </tr>
            <!-- Footer -->
            <tr>
                <td
                    style="padding: 20px; text-align: center; background-color: #f8f9fa; font-size: 12px; color: #999999;">
                    Questions? Contact donor at <a href="mailto:{{ $email }}"> {{ $email }} </a>.
                </td>
            </tr>
        </table>
    </center>
</body>

</html>
