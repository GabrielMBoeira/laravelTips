<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List User</title>
</head>
<body>

    <h1> {{ $user->name }} </h1>
    <p> {{ $user->email }} </p>
    <p> {{ date('d/m/y H:i', strtotime($user->created_at)) }} </p>

</body>
</html>
