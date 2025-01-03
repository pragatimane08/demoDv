<!-- resources/views/emails/meetingScheduled.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Meeting Scheduled</title>
</head>
<body>
    <h2>New Meeting Scheduled</h2>
    <p><strong>Name:</strong> {{ $name }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Phone:</strong> {{ $phone }}</p>
    <p><strong>Meeting Date:</strong> {{ $date }}</p>
    <p><strong>Meeting Time:</strong> {{ $time }}</p>
</body>
</html>
