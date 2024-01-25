<?php 
    require_once('./controllers/formsControllers.php');
    

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

  <body class="bg-dark">
        <main class="d-flex flex-column  align-items-center h-100"> 
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
                                <td class="d-flex justify-content-center gap-2">
                                    <a class="btn btn-primary " href="index.php?route=edit&id=<?php echo $value["id"]; ?>">Editar</a>
                                    <form method="post">

                                        <input type="hidden" value="<?php echo $value["id"]; ?>" name="eliminarRegistro">
                                        
                                        <button type="submit" class="btn btn-primary">Borrar</button>

                                        <?php

                                            $eliminar = new FormsController();
                                            $eliminar -> ctrDeleteUser();
                                        ?>
                                    </form>	
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
        </main>
   


