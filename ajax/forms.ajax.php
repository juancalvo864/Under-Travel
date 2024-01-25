<?php
    require_once "./controllers/formsControllers.php";
    require_once "./models/formModel.php";

// Clase AJAX 

class AjaxForm{
    //valido mail
    public $validarEmail;

    public function ajaxValidarEmail(){
        $item = "email";
        $value = $this->validarEmail;

        $response = FormsController::ctrSelectRecord($item,$value);

        echo json_encode($response);
    }
}

//Creo objeto AJAX

if (isset($_POST["validarEmail"])){
    $valEmail = new AjaxForm();
    $valEmail -> validarEmail = ($_POST["validarEmail"]);
    $valEmail -> ajaxValidarEmail();
}