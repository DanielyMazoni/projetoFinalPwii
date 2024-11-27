<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar receita</title>
</head>
<body>
    <form action="/criar_receita" method="post">
        @csrf
        <label for="descricao">Nome</label>
        <input type="text" name="descricao">

        <input type="submit" value="Salvar">
    </form>
</body>
</html>

