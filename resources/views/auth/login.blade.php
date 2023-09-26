<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="/login" method="post">
        @csrf
        usuario/email
        <input type="text" name="usuario">
        clave
        <input type="password" name="clave" id="">

        <input type="submit" value="Ingresar">
    </form>
</body>
</html>