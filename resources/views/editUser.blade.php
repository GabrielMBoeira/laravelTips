<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
</head>

<body>

    <form action=" {{ route('users.edit', ['user' => $user->id]) }} " method="post">
        @csrf
        @method('PUT')
        <label>Nome do usuário</label>
        <input type="text" name="name" value=" {{ $user->name }} ">

        <label>E-mail</label>
        <input type="email" name="email" value=" {{ $user->email }} ">

        <label>Senha</label>
        <input type="password" name="password">

        <button>Editar usuário</button>
    </form>
</body>

</html>
