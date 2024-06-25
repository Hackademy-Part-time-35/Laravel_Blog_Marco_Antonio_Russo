<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

    <div>Hai ricevuto un nuovo contatto dal sito {{ config('app.name') }}</div>

    <div>Nome: {{ $name }}</div>

    <div>Email: {{ $email }}</div>

    <div>Messaggio: {{ $content }}</div>

    <div>Priorità messaggio: {{ $priority }}</div>
</body>
</html>