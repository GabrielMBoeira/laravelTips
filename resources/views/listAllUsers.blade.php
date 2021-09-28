<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de usuários</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>#ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td> {{ $user->id }} </td>
                    <td> {{ $user->name }} </td>
                    <td> {{ $user->email }} </td>
                    <td>
                        <a href="">Ver usuário</a>
                        <form action=" {{ route('users.destroy', ['user' => $user->id]) }} " method="post">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="user" value=" {{ $user->id }} ">
                            <input type="submit" value="remover">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
