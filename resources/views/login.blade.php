<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Web</title>
        <link rel="stylesheet" type="text/css" href="/public/style.css">
        <link rel="stylesheet" href="cl-icon/css/all.min.css">
    </head>
    <body>
        <div class="wrapper">
            <form action="{{route('r.usuario')}}" method="post" class="form">
                <h1 class="title">Inicio</h1>
                <div class="inp">
                    <input type="text" name="" id="" class="input" placeholder="Usuario">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="inp">
                    <input type="password" name="" id="" class="input" placeholder="Contraseña">
                    <i class="fa-solid fa-lock"></i>
                </div>
                <button class="submit">Iniciar Sesion</button>
                <p class="footer">¿No tienes cuenta? Por favor, <a href="#" class="link">Registrate</a></p>
            </form>

            <div></div>
            <div class="banner">
                <h1 class="wel-text">BIENVENIDO<br/></h1>
                <p class="para">A la Clínica Dental<br/> Rojas</p>
            </div>
        </div>
    </body>
</html>
