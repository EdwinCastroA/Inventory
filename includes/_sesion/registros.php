<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>
    <link rel="stylesheet" href="../../css/login.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
    

<form  action="validar.php" method="POST">
    <div id="login" >

    <div class="container">
        <div id="login"></div>
        <div class="row justify-content-center align-items-center min-vh-100">
            <div id="login-box" class="col-12 col-md-8 col-lg-6">
            <form id="login-form" class="form" action="" method="post">
                <h2 class="text-center">𝐑𝐞𝐠𝐢𝐬𝐭𝐫𝐨</h2>

                <div class="form-group">
                    <label for="nombre" class="form-label">Nombre *</label>
                    <input type="text"  id="nombre" name="nombre" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="username">Correo:</label><br>
                    <input type="email" name="correo" id="correo" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="password">Contraseña:</label><br>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="telefono" class="form-label">Telefono *</label>
                    <input type="tel"  id="telefono" name="telefono" class="form-control" required>
                    <input type="hidden" name="accion" value="insertar_usuarios">
                </div>
                           

                <div class="mb-3">
                    <input type="submit" name="registrar">
                               
                </div>

            </form>
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
</body>
</html>

