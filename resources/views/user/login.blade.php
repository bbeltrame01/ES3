<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyPocket - Sistema de Gestão Financeira</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="icon" type="imagem/png" href="../media/icon-mypocket.png" />
</head>
<body>
    <div class="loginbox">
        {!! Form::open(['route' => 'user.login', 'method' => 'post']) !!}
        <img src="../media/avatar2.png" class="avatar">
        <h1>Bem-Vindo!</h1>
        <form>
            <p>Usuário</p>
            <input type="text" name="" placeholder="Usuário">
            <p>Senha</p>
            <input type="password" name="" placeholder="Senha">
            <input type="submit" name="" value="Login">
            <a href="#">Esqueci minha senha</a><br>
            <a href="#">Criar nova conta</a>
        </form>
        {!! Form::close() !!}
                
    </div>    
</body>
</html>