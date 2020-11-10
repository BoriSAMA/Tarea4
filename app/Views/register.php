<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registrarse</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="pets, social media, social network" />
    <link href="public/css/login.css" rel="stylesheet" />
    <link href="public/css/fontawesome-all.css" rel="stylesheet"/>
</head>


<body>
    <h1>PetBook</h1>
    <div class=" w3l-login-form">
        <h2>Registrarse</h2>
        <form action="#" method="POST">

            <div class=" w3l-form-group">
                <label>Nombre del dueño de las mascotas:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" placeholder="Nombre" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Usuario:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" placeholder="Usuario" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Contraseña:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control" placeholder="Contraseña" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Correo de verificacion:</label>
                <div class="group">
                    <i class="fa fa-envelope"></i>
                    <input type="email" class="form-control" placeholder="Correo" required="required" />
                </div>
            </div>
            <button type="submit">Registrarse</button>
        </form>
        <p class=" w3l-register-p">ya tiene cuenta?<a href="login.php" class="register"> Iniciar sesion</a></p>
    </div>

    <script type="text/javascript" src="public/js/login.js"></script>
</body>

</html>