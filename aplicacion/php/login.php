<?php
    session_start();
    if($_POST){
        if(($_POST['usuario']=="lion-sama")&&($_POST['clave']=="tigerh1")){
            
            echo "Validacion de usuario correcto";
                
                $_SESSION['usuario']="lion-sama";

            header("location:index.php");
    }else{
        echo "<script> alert('Usuario o Contraseña incorrectas'); </script>";
    }
}


?>

<!doctype html>
<html lang="en">
    <head>
        <title>Login</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>
        <body>
            <div class="container">

                <div class="row">
                    <div class="col-md-4">
                    </div>

                    <div class="col-md-4">

                    <div class="card mt-3">
                        <div class="card-header">Iniciar Sesion</div>
                        <div class="card-body">
                        <form action="login.php" method="post">
                     Usuario : <input type="text" name="usuario" id="" class="form-control">
                     Clave : <input type="password" name="clave" id="" class="form-control">
                        <br>
                     <button type="submit" class="btn btn-success">Entrar al portafolio</button>
                    </form>

                        </div>
                        <div class="card-footer text-muted"></div>
                    </div>


                    </div>

                    <div class="col-md-4">
                    </div>
                </div>



           </div>
       </body>
</html>
