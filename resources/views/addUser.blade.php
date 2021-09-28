<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário User</title>
</head>
<body>

    <form action=" {{ route('users.store') }} " method="post">
    @csrf
        <label>Nome do usuário</label>
        <input type="text" name="name">

        <label>E-mail</label>
        <input type="email" name="email">

        <label>Senha</label>
        <input type="password" name="password">

        <button>Cadastrar usuário</button>
    </form>
</body>
</html>
