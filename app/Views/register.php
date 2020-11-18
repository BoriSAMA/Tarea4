<head>
    <link href="../public/css/login.css" rel="stylesheet" />
    <link href="../public/css/fontawesome-all.css" rel="stylesheet"/>
    <link href="../public/css/structure.css" rel="stylesheet" />
</head>

<body id="main">
    <h1>PetBook</h1>
    <div class=" w3l-login-form">
        <h2>Registrarse</h2>
        <form action="<?php echo site_url('Home/registar');?>" method="POST">

            <div class=" w3l-form-group">
                <label>Nombre del dueño de las mascotas:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Cedula:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="number" class="form-control" id="nit" name="nit" placeholder="Cedula" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Direccion:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Telefono:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Telefono" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Correo de verificacion:</label>
                <div class="group">
                    <i class="fa fa-envelope"></i>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Correo" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Contraseña:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control" id="clave" name="clave" placeholder="Contraseña" required="required" />
                </div>
            </div>
            
            <button type="submit">Registrarse</button>
        </form>
        <p class=" w3l-register-p">Ya tiene cuenta?<a href="<?php echo site_url('Home');?>" class="register"> Iniciar sesion</a></p>
    </div>
</body>

<script>
    var slideIndex = 0;
    var bg = "bg_login";
    var slidesNumber = 3;
    showSlides();

    function showSlides() {
        slideIndex++;
        if (slideIndex > slidesNumber) {slideIndex = 1}    
            document.getElementById('main').style.background = "url(../public/img/bg_login" + slideIndex +".jpg) no-repeat 0px 0px"; 
            document.getElementById('main').style.backgroundSize = "cover";
    setTimeout(showSlides, 5000); // Change image every 2 seconds
    }
</script>