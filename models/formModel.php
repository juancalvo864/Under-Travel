<?php 
require_once "conexion.php";

class ModelForm{
    //Insetar registros
    static public function mdlSignUp($table,$data){
        $stmt = Conexion::conectar() -> prepare("INSERT INTO $table(nombre,apellido,email,password) 
        VALUES(:nombre,:apellido,:email,:password)");

        $stmt -> bindParam(":nombre",$data["nombre"],PDO::PARAM_STR);
        $stmt -> bindParam(":apellido",$data["apellido"],PDO::PARAM_STR);
        $stmt -> bindParam(":email",$data["email"],PDO::PARAM_STR);
        $stmt -> bindParam(":password",$data["password"],PDO::PARAM_STR);

        if($stmt->execute()){
            return "ok";
        }else {
            print_r(Conexion::conectar() -> errorInfo());
        }
        $stmt -> closeCursor();
        $stmt = null;
    }

    // Selccion de registros
    static public function mdlSelectRecord($table,$item,$value){
        if($item == null && $value == null){
            $stmt = Conexion::conectar() -> prepare("SELECT * ,DATE_FORMAT(fecha,'%d/%m/%Y') AS fecha FROM $table ORDER BY ID DESC");

            $stmt -> execute();
            return $stmt -> fetchAll();
        } else {
            $stmt = Conexion::conectar() -> prepare("SELECT * ,DATE_FORMAT(fecha,'%d/%m/%Y') AS fecha FROM $table WHERE $item = :$item ORDER BY id DESC");

            $stmt -> bindParam(":$item",$value,PDO::PARAM_STR);

            $stmt -> execute();

            return $stmt -> fetch();
        }
    }

    // Edicion de registros 
    static public function mdlEditRecord($table, $data){
            $stmt = Conexion::conectar()->prepare("UPDATE $table SET nombre = :nombre, apellido = :apellido, email = :email, password = :password WHERE id = :id");
            
            $stmt->bindParam(":nombre", $data["nombre"], PDO::PARAM_STR);
            $stmt->bindParam(":apellido", $data["apellido"], PDO::PARAM_STR);
            $stmt->bindParam(":email", $data["email"], PDO::PARAM_STR);
            $stmt->bindParam(":password", $data["password"], PDO::PARAM_STR);
            $stmt->bindParam(":id", $data["id"], PDO::PARAM_INT);

            if ($stmt->execute()) {
                return "ok";
            } else {
                print_r(Conexion::conectar()->errorInfo());
            }

            $stmt->closeCursor();
            $stmt = null;
        }

       //Eliminar usuario

            static public function mdlDeleteUser($table,$id){
                $stmt = Conexion::conectar()->prepare("DELETE FROM $table WHERE id = :id");
                $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        
                if ($stmt->execute()) {
                    return "ok";
                } else {
                    print_r(Conexion::conectar()->errorInfo());
                }
        
                $stmt->closeCursor();
                $stmt = null;
            }
        }


