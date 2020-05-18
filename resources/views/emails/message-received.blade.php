<!DOCTYPE html>
<html>
<head>
    <title>Mensaje recibido</title>
</head>
<body>
    <p>Resiviste un mensaje de: {{ $msg['name'] }} - {{ $msg['email'] }}</p>
    <p><stong>Asunto:</stong> {{ $msg['subject'] }}</p>
    <p><stong>Contenido:</stong> {{ $msg['content'] }}</p>
</body>
</html>