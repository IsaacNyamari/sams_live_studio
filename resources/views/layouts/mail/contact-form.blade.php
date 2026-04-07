<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Contact Form Message</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 20px;">
    <h1 style="color: #FF8F20; border-bottom: 2px solid #FF8F20; padding-bottom: 10px;">
        New Contact Form Message
    </h1>

    <p>You have received a new inquiry from <strong>{{ $data['name'] }}</strong>.</p>

    <h2 style="color: #FF8F20; margin-top: 25px;">Contact Details</h2>
    <ul style="background-color: #f9f9f9; padding: 15px; border-radius: 5px; list-style: none;">
        <li><strong>Name:</strong> {{ $data['name'] }}</li>
        <li><strong>Email:</strong> <a href="mailto:{{ $data['email'] }}" style="color: #FF8F20;">{{ $data['email'] }}</a></li>
        <li><strong>Phone:</strong> {{ $data['phone'] ?? 'Not provided' }}</li>
        <li><strong>Service Interested In:</strong> <strong style="color: #FF8F20;">{{ ucfirst(str_replace('-', ' ', $data['service'])) }}</strong></li>
    </ul>

    <h2 style="color: #FF8F20; margin-top: 25px;">Message</h2>
    <div style="background-color: #f9f9f9; padding: 15px; border-radius: 5px; border-left: 4px solid #FF8F20;">
        <p>{{ $data['message'] }}</p>
    </div>

    <div style="margin: 25px 0;">
        <a href="mailto:{{ $data['email'] }}" style="display: inline-block; background-color: #FF8F20; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; margin-right: 10px;">
            Reply to {{ $data['name'] }}
        </a>
        @if(!empty($data['phone']))
        <a href="tel:{{ $data['phone'] }}" style="display: inline-block; background-color: #28a745; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;">
            Call {{ $data['name'] }}
        </a>
        @endif
    </div>

    <hr style="border: none; border-top: 1px solid #eee; margin: 20px 0;">

    <div style="background-color: #f0f0f0; padding: 10px; border-radius: 5px; font-size: 14px;">
        <p><strong>Additional Information:</strong></p>
        <p>Sent from: {{ $data['email'] }}<br>
        Date: {{ now()->format('F j, Y g:i A') }}<br>
        IP Address: {{ request()->ip() }}</p>
    </div>

    <p style="margin-top: 30px;">
        Thanks,<br>
        <strong>{{ config('app.name') }}</strong>
    </p>
</body>
</html>