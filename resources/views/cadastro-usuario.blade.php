<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bootstrap demo</title>
</head>
<body>
    
    <form action="{{ route ('usuario.cadastro')}}"method="POST">
        @csrf
        <input type="text" name= "name" placeholder="Name">
        <input type="email" name= "email" placeholder="email">
        <input type="password" name= "senha" placeholder="senha">
        <input type="password" name= "confima_senha" placeholder="Confirme a senha"><br>
        <button type="submit">Cadastrar</button>
   

    </form>
</body>
</html>