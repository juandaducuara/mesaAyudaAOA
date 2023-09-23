<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <form action="/register" method="post">
        @csrf
        <input type="text" name="nombre">
        <input type="text" name="apellido">
        <input type="text" name="usuario">
        <input type="email" name="email">
        <input type="text" name="tipo_usuario">
        <input type="password" name="clave">
        <input type="password" name="clave_confirmacion">
        <input type="text" name="estado">
        <button type="submit">Registrarse</button>
    </form>
</body>
</html>