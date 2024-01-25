<main class=" d-flex justify-content-center align-items-center ">
    <form class="pt-5 form_signup" action="" method="post">
        <legend>Sign up</legend>
        <div class="container_form_login">
            <div class="p-3 form_login ">
                <div class="mb-3 ">
                    <label for="signup" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="signup" aria-describedby="emailHelp" name="signUp_name">
                    <div id="emailHelp" class="form-text">Introduzca su nombre aqui.</div>
                </div>
                <div class="mb-3 ">
                    <label for="signup" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="signup" aria-describedby="emailHelp" name="signUp_lastName">
                    <div id="emailHelp" class="form-text">Introduzca su apellido aqui.</div>
                </div>
                <div class="mb-3 ">
                    <label for="semail_signup" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email_signup" aria-describedby="emailHelp" name="signUp_email">
                    <div id="emailHelp" class="form-text">Nunca compartiremos tu correo con nadie.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="signup" name="signUp_password">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Acepto los temrinos y condiciones</label>
                </div>
                <?php
                    include_once("./controllers/formsControllers.php");
                    $signUp = FormsController::ctrSignUp();
                    
                    if($signUp =="ok"){
                        
                    echo '<script> 
                        if (window.history.replaceState){
                        window.history.replaceState(null,null, window.location.href);
                        }
                        </script>';
                        
                    echo '<div class="alerta alerta-exito"> El usuario se ha registrado con exito </div>';
                    }
                
                ?> 
                <input type="submit" class="btn btn-primary" value="enviar"></input>
            </div>
        </div>
        
    </form>
</main>


