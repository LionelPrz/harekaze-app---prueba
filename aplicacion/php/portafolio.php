<?php include("cabecera.php");?>
<?php include("conexion.php");?>
<?php 
$objConexion = new conexion(); 
$sql = "INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`) VALUES (NULL, 'Proyecto 1', 'imagen.jpg', 'descripcion mamalona');";
$objConexion -> ejecutar($sql);

?>
<br>

    <div class="container">
        <div class="row">
            <div class="col-md-6">

            <div class="card">
        <div class="card-header">Datos del proyecto</div>
        <div class="card-body">
            <form action="portafolio.php" method="post">
            Nombre del proyecto: <input class="form-control" type="text" name="nombre" id="" require>
            <br>
            Imagen del proyecto: <input class="form-control" type="file" name="archivo" id="">
            <br>
            <input type="submit" class="btn btn-success" value="Enviar Proyecto">
    </form>

        </div>
    </div>
            </div>
            <div class="col-md-6">
            <div class="table">
    <table
        class="table table-primary"
    >
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Imagen</th>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td scope="row">3</td>
                <td>Proyecto Web</td>
                <td>Imagen.jpg</td>
            </tr>
        </tbody>
    </table>
</div>
            </div>
        </div>

    </div>


    <?php include("pie.php") ?>