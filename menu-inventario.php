<?php
include("conexion.php");
// session_start();

// if (!isset($_SESSION['id_usuario'])) {
//     header("Location: login.html");
//     exit;
// } else {
//     echo 'Usuario autenticado con ID: '.$_SESSION['id_usuario'];
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <title>Menu inventario</title>
</head>
<body>

<style>
    section a{
        text-decoration: none;
    }
    .btn-options{
        /*background-color: #003c7e !important;*/
        margin-bottom: 30px;
        height: 80px;
   
    }
</style>

<section class="d-flex col-12 flex-column align-items-center justify-content-center">

    <img class="mb-3 mt-4" src="img/logo-copia.png" alt="" width="110" height="100">

    <div class="mb-5 d-flex justify-content-around col-10 col-md-6">
        <h2 class="">Menu del módulo Inventario</h2>
        <a href="menu-principal.php"><button class="form-control btn btn-warning" style="" ><i class="bi bi-arrow-left"></i>Regresar </button></a>
        <!-- <a href="logout.php"><button class="form-control btn-danger"  >Cerrar sesión </button></a> -->
    </div>

    <div class="d-flex col-10 col-md-6 flex-column ">
        
      

        <div class="d-flex flex-column flex-md-row col-12 justify-content-between justify-content-md-around align-items-center ">
             <div class="col-12 col-md-5" >
                <a href="hembra.php"><button class="form-control btn-primary btn-options" >Registrar hembra</button></a>
            </div>
            <div class="col-12 col-md-5">
                <a href="macho.php"><button class="form-control btn-primary btn-options" >Registrar macho</button></a>
            </div>
        </div>
           
        <div class="d-flex flex-column flex-md-row col-12 justify-content-between justify-content-md-around align-items-center">
            <div class="col-12 col-md-5">
                <a href="hembra-tabla.php"><button class="form-control btn-primary btn-options" >Ver registros de hembras</button></a>
            </div>
            <div class="col-12 col-md-5">
                <a  href="macho-tabla.php"><button class="form-control btn-primary btn-options" >Ver registros de machos</button></a>
            </div>
        </div>

            
        
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>