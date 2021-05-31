<!DOCTYPE html>
<html>
    <head>
    <title>Mensaje Recibido</title>
    </head>
    <body>
        <p>Recibiste un mensaje de: {{$msg['nombre']}}</p>
        <p>Enviado por: {{$msg['email']}}</p>
        <p>Asunto:<strong>{{$msg['subject']}}</strong></p>
        <P>Contenido: {{$msg['content']}}</P>
    </body>
</html>