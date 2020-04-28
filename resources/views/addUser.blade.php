<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <label for="">Nome do Usuário</label>
        <input type="text" name="name">

        <label for="">E-mail do Usuário</label>
        <input type="email" name="email">

        <label for="">Senha do Usuário</label>
        <input type="password" name="password">

        <input type="submit" value="Cadastrar usuario">

    </form>

</body>
</html>