<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package Inquiry</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9f9f9;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .header {
            background-color: #030170;
            padding: 20px 30px;
            text-align: center;
            border-bottom: 1px solid #ddd;
            color: #fff;
        }

        .logo {
            max-width: 80px;
            height: auto;
            margin-bottom: 15px;
        }

        .content {
            padding: 30px;
        }

        h1 {
            color: #333;
            margin-bottom: 25px;
            font-size: 28px;
        }

        .field {
            margin-bottom: 20px;
        }

        .label {
            font-weight: 600;
            color: #333;
            display: block;
            margin-bottom: 5px;
        }

        .value {
            color: #555;
            line-height: 1.6;
            word-wrap: break-word;
        }

        footer {
            background-color: #030170;
            padding: 20px 30px;
            text-align: center;
            font-size: 12px;
            color: #fff;
            border-top: 1px solid #ddd;
        }

        footer a {
            color: #fff;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="{{ asset('images/logos/sams_logo.png') }}" alt="Sam's Live Studio Logo" class="logo">
        </div>
        <div class="content">
            <h1>Package Inquiry</h1>
            <div class="field">
                <span class="label">Name</span>
                <div class="value">{{ $data['name'] }}</div>
            </div>
            <div class="field">
                <span class="label">Email Address</span>
                <div class="value"><a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a></div>
            </div>
            <div class="field">
                <span class="label">Phone Number</span>
                <div class="value">{{ $data['phone'] }}</div>
            </div>
            <div class="field">
                <span class="label">Selected Package</span>
                <div class="value">{{ $data['package'] }}</div>
            </div>
            <div class="field">
                <span class="label">Duration</span>
                <div class="value">{{ $data['duration'] }}</div>
            </div>

            <div class="field">
                <span class="label">Additional Information</span>
                <div class="value">{{ $data['message'] }}</div>
            </div>
        </div>
        <footer>
            <p>&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
            <p>Contact us: <a href="mailto:{{ env('STUDIO_EMAIL') }}">{{ env('STUDIO_EMAIL') }}</a></p>
        </footer>
    </div>
</body>

</html>
