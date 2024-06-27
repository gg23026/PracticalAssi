<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Our website</title>
</head>
<body>
<h1>Welcome to {{ config('app.name') }}</h1>
<p>Hi {{ $notifiable->name }},</p>
<p>Thank you for registering at {{ config('app.name') }}. We're glad to have you with us!</p>
<p><a href="{{ url('/') }}">Visit our website</a></p>
</body>
</html>
