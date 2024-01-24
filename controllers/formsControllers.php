<?php
 require_once("./models/formModel.php");
class FormsController{
    //Registros
    static public function  ctrSignUp(){
        if(isset($_POST["signUp_name"])){
            $table = "registros";
            $data = array(
                "nombre" => $_POST["signUp_name"],
                "apellido" => $_POST["signUp_lastName"],
                "email" => $_POST["signUp_email"],
                "password" => $_POST["signUp_password"],
            );
            $response = ModelForm::mdlSignUp($table,$data);
            return $response;
        }
    }

    //Seleccion de Registro
    static public function ctrSelectRecord($item,$value){
        $table = "registros";
        $response = ModelForm::mdlSelectRecord($table,$item,$value);
        return $response;
    }

    //Ingreso
    public function ctrLogin(){
        if(isset($_POST["login_email"])){
            $table = "registros";
            $item = "email";
            $value = $_POST["login_email"];

            $response = ModelForm::mdlSelectRecord($table,$item,$value);

            if($response["email"] == $_POST["login_email"] && $response["password"] == $_POST["login_password"]){
                $_SESSION["validarIngreso"] = "ok";

                echo'<script>
                            if(window.history.replaceState){
                                window.history.replaceState(null,null,window.location.href);
                            }
                            window.location = "index.php?route=users";
                    </script>';
            }else{
                echo '<script>
                            if(window.history.replaceState){
                                window.history.replaceState(null,null,window.location.href);
                            }
                           
                    </script>';
                echo'<div class="alert_login"> Error al ingresar al sistema,el mail o la contraseña no coinciden</div>';    
            }
        }
    }

    //Edicion de registro

    
        // Método para la edición
        static public function ctrEditUser() {
            if (isset($_POST["edit_name"])) {

                if ($_POST["edit_password"] != "") {
    
                    $password = $_POST["edit_password"];
                } else {
    
                    $password = $_POST["passwordActual"];
                }
    
                $table = "registros";
    
                $data = array(
                    "id" => $_POST["idUser"],
                    "nombre" => $_POST["edit_name"],
                    "apellido" => $_POST["edit_lastName"],
                    "email" => $_POST["edit_email"],
                    "password" => $password
                );
    
                $respuesta = ModelForm::mdlEditRecord($table, $data);
    
                if ($respuesta == "ok") {
    
                    echo '<script>
    
                        if ( window.history.replaceState ) {
    
                            window.history.replaceState( null, null, window.location.href );
    
                        }
    
                        window.location = "index.php?route=users";
    
                    </script>';
                }
            }
        }

        //Eliminar usuario

        static public function ctrDeleteUser(){
            
            if (isset($_POST["eliminarRegistro"])) {

                $table = "registros";
                $valor = $_POST["eliminarRegistro"];
    
                $respuesta = ModelForm::mdlDeleteUser($table, $valor);
    
                if ($respuesta == "ok") {
    
                    echo '<script>
    
                        if ( window.history.replaceState ) {
    
                            window.history.replaceState( null, null, window.location.href );
    
                        }
    
                        window.location = "index.php?route=users";
    
                    </script>';
                }
            }
        
    }
    
}