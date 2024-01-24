<?php 
    require_once('./controllers/formsControllers.php');
    session_start();
    
    if(!isset($_SESSION["validarIngreso"])){
        echo '<script> window.location = "index.php?route=login";</script>';
        return;
    } else{
        if($_SESSION["validarIngreso"] != "ok"){
            echo '<script>window.location = "index.php?route=login";</script>';
            return;
        }
    }
    $usuarios = FormsController::ctrSelectRecord(null,null);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/users.css">
  </head>
  <body class="bg-dark">
        <main class="d-flex flex-column justify-content-center align-items-center h-100"> 
            <h2 class="text-light mt-3">Users</h2>
            <table class="table text-light w-75 mt-4">
                <thead class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Email</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Acciones</th>
                </thead>
                <tbody>
                    <?php foreach ($usuarios as $key => $value): ?>
                        <tr class="text-center">
                            <th scope="row"><?php echo $key + 1; ?></th>
                            <td><?php echo $value["nombre"]; ?></td>
                            <td><?php echo $value["apellido"]; ?></td>
                            <td><?php echo $value["email"]; ?></td>
                            <td><?php echo $value["fecha"]; ?></td>
                            <td>
                                <a href="index.php?ruta=edit&id=<?php echo $value["id"]; ?>">Editar</a>
                                <a href="#">X</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>

