<!DOCTYPE html>
<html lang="en">

<head>
    <title>Iniciar sesion</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="pets, social media, social network" />
    <link href="public/css/login.css" rel="stylesheet" />
    <link href="public/css/fontawesome-all.css" rel="stylesheet"/>
</head>
<body id="main" class="fade">
		<h1>PetBook</h1>
		<div class=" w3l-login-form">
		    <h2>Iniciar sesion</h2>
		    <form action="#" method="POST">

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
		        <div class="forgot">
		            <a href="#">Olvidaste la contraseña?</a>
		            <p><input type="checkbox">Recuerdame</p>
		        </div>
		        <button type="submit">Iniciar sesion</button>
		    </form>
		    <p class=" w3l-register-p">No tiene cuenta?<a href="register.php" class="register"> Registrarse</a></p>
		</div>  

	<script type="text/javascript" src="public/js/login.js"></script>
</body>

</html>