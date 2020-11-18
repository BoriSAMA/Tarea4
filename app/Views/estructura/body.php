<body>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Contraseña</th>
                </tr>
            </thead>
            <tbody>
                
                    <?php
                    /*
                    $filas = '';
                    foreach ($usuarios as $key) {
                       $filas .= "<tr>";
                       $filas .= "<td>".$key['pkIdUsuario']."</td>";
                       $filas .= "<td>".$key['correoUsuario']."</td>";
                       $filas .= "<td>".$key['claveUsuario']."</td>";
                       $filas .= "</tr>";
                    }
                    echo $filas;
                    */
                    ?>
                
            </tbody>
        </table>
    </div>


    <br><br><br>

    <div class="container">
        <!--<form action="http://localhost/tarea4/index.php/home/index" method="POST"> -->
        <form action="<?php echo site_url('Home/guardar');?>" method="POST"> 
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="email" name="email" >
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="clave" name="clave">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>