<!doctype html>

<html>
    <head>
        <title>Notification-email</title>
    </head>
    <body>
        <h1>You have a new message!</h1>
        <h2>User:{{ $vname }}, sent you the following message:</h2>
        <p>{{$vmessage }}</p>
        <h3 >Contact Info:</h3>
        <ul>
            <li>Email:{{$vemail }}</li>
            <li>Phone number:{{ $vphone}}</li>
        </ul>
    </body>
</html>
