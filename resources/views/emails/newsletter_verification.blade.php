<!DOCTYPE html>
<html>
<head>
    <title>Verify Your Email</title>
</head>
<body>
    <p>Please click the link below to verify your email address:</p>
    <a href="{{ url('/newsletter/verify/' . $token) }}">Verify Email</a>
</body>
</html>