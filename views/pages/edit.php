<?php
    require_once("./controllers/formsControllers.php");
    if (isset($_GET['id'])) {
        $value = $_GET['id'];
        $item = "id";
        $usuario = FormsController::ctrSelectRecord($item,$value);
    }
    
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="public/signup.css">
  </head>
  <body >
    <main class=" d-flex justify-content-center align-items-center ">
        <form class="pt-5 " action="" method="post">
            <legend>Edit</legend>
            <div class="container_form_login">
                <div class="p-3 form_login ">
                    <div class="mb-3 ">
                        <label for="edit" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="edit" aria-describedby="emailHelp" name="edit_name" value=<?php echo $usuario['nombre'] ?> >
                    </div>
                    <div class="mb-3 ">
                        <label for="edit" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="edit" aria-describedby="emailHelp" name="edit_lastName" value=<?php echo $usuario['apellido'] ?> >
                    </div>
                    <div class="mb-3 ">
                        <label for="edit" class="form-label">Email</label>
                        <input type="email" class="form-control" id="edit" aria-describedby="emailHelp" name="edit_email" value=<?php echo $usuario['email'] ?> >
                    </div>
                    <div class="mb-3 ">
                        <label for="edit" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="edit" aria-describedby="emailHelp" name="edit_password" >
                    </div>
                    <input type="hidden" name="passwordActual" value="<?php echo $usuario["password"]; ?>">
				    <input type="hidden" name="idUser" value="<?php echo $usuario["id"]; ?>">
                    <?php
                        include_once("./controllers/formsControllers.php");
                        $edit = FormsController::ctrEditUser();
                        if($edit == "ok"){

                            echo '<script>
                                    if ( window.history.replaceState ) {                
                                        window.history.replaceState( null, null, window.location.href );               
                                    }                
                                 </script>';
                
                            echo '<div class="alerta alerta-actulizar">El usuario ha sido actualizado</div>
                                <script>                
                                    setTimeout(function(){                                    
                                        window.location = "index.php?route=users";                    
                                    },3000);                    
                                </script>
                
                            ';
                
                        }
                    ?>
                    <button type="submit" class="btn btn-primary">Editar</button>
                </div>
            </div>
            
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>