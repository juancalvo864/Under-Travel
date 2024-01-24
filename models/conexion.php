<?php

class Conexion{
    static public function conectar(){
        $link = new PDO(
            "mysql:host=localhost;dbname=php_proyecto_avanzado",
            "root",
            "");
        $link -> exec("set names utf8");
        return $link;
    }
}