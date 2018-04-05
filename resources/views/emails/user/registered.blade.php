<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thank you for registration!</title>
</head>
<body>
    <h1>Dear, {{$data['name']}}</h1>
    <p>Your email, {{$data['email']}} has been registered</p>
    <p>Activation code: <a href="http://sports.kz:8080/auth/{{$data['activation_code']}}">Click here</a></p>
</body>
</html>