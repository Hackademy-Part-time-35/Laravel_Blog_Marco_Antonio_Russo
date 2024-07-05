<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

    <div>è stato creato un nuovo articolo sul sito {{ config('app.name') }}</div>

    <div>Titolo: {{ $title }}</div>

    <div>Creato dall'email: {{ $email }}</div>

</body>
</html>