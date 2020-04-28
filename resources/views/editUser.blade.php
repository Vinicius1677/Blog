<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição do Usuários</title>
</head>
<body>
    <form action="{{ route('users.update', ['user' => $user->id]) }}" method="post">
        @csrf
        @method('PUT')
        <label for="">Nome do Usuário</label>
        <input type="text" name="name" value="{{$user->name}}">

        <label for="">E-mail do Usuário</label>
        <input type="email" name="email" value="{{$user->email}}">

        <label for="">Senha do Usuário</label>
        <input type="password" name="password">

        <input type="submit" value="Editar usuario">

    </form>

</body>
</html>