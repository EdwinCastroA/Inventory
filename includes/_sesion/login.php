
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../../css/login.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/styles.css">

</head>

<body>

<form  action="validar.php" method="POST">

    <div id="login" >
    <div class="container">
        <div id="login"></div>
        <div class="row justify-content-center align-items-center min-vh-100">
            <div id="login-box" class="col-12 col-md-8 col-lg-6">
                <h2 class="text-center">𝐈𝐍𝐈𝐂𝐈𝐎 𝐃𝐄 𝐒𝐄𝐒𝐈𝐎𝐍</h2>
                <p class="text-center">Ingrese su usuario y contraseña</p>


                <div id="alert">
                </div>
                <form class="row g-3 needs-validation" novalidate id="loginForm" name="loginData">

                    <div class="form-group">
                        <label for="username">Correo:</label><br>
                        <input type="text" name="correo" id="correo" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Contraseña:</label><br>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <br>
                        <input type="submit"class="btn btn-success btn-md space" value="ingresar">
                            <div id="register-link" class="text-right">
                            <br>
                            <a href="registros.php"><input type="button"  class="btn btn-primary space" value="registrarse"></a>
                        </div>
                    </div>
                    
                </form>
                <br>

                <p class="text-center"> <a href="../recovery.php"></a></p>
            </div>
        </div>
    </div>
        
    </div>
    </form>

<style>
   body{
    background-image: url(https://fotografias.lasexta.com/clipping/cmsimages01/2020/05/08/E3BC9A26-F5D7-4B1D-9497-72A52CE9CB79/98.jpg?crop=1300,731,x0,y19&width=1900&height=1069&optimize=high&format=webply); 
}

.lol{
    text-align: center;
}
.container{
   
    width: auto;
    padding: 30px;
    background-color: transparent;
}
</style>
</body>
</html>






















<!-- <div class="container">
        <div id="login"></div>
        <div class="row justify-content-center align-items-center min-vh-100">
            <div id="login-box" class="col-12 col-md-8 col-lg-6">
                <h2 class="text-center">𝐈𝐍𝐈𝐂𝐈𝐎 𝐃𝐄 𝐒𝐄𝐒𝐈𝐎𝐍</h2>
                <p class="text-center">Ingrese su usuario y contraseña</p>


                <div id="alert">
                </div>
                <form class="row g-3 needs-validation" novalidate id="loginForm" name="loginData">


                    <div class="form-group">
                        <label for="usuario" class="form-label">Usuario</label>
                        <input type="text" id="usuario" name="usuario" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">𝔸𝕔𝕔𝕖𝕕𝕖𝕣</button>
                    </div>
                </form>
                <br>

                <p class="text-center"> <a href="../recovery.php"></a></p>
            </div>
        </div>
    </div> -->

    <!-- <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h2 class="text-center">INICIO DE SESION</h2>

                            <div class="form-group">
                                <label for="username">Correo:</label><br>
                                <input type="text" name="correo" id="correo" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="password">Contraseña:</label><br>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>


                            <div class="form-group">
                             <br>
                                <input type="submit"class="btn btn-success btn-md space" value="ingresar">
                                <div id="register-link" class="text-right">
                                    <br>
                                <a href="registros.php"><input type="button"  class="btn btn-primary space" value="registrarse"></a>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> -->