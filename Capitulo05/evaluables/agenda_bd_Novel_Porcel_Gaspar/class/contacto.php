<?php
// incuye otro fichero php
include_once('./database/connection.php'); 
// creamos una clase Contacto
class Contacto{
    // funcion crear contacto
    public function createUser(){
        $sql = "INSERT INTO contactos"."(id,name,surname,phone) "."VALUES('".$this->cleanData($_POST['id'])."','".$this->cleanData($_POST['name'])."','".$this->cleanData($_POST['surname'])."','".$this->cleanData($_POST['phone'])."')";
        return pg_affected_rows(pg_query($sql));
    }
    // funcion ver contactos
    public function getUsers(){             
        $sql ="select *from contactos"." ORDER BY id";
        return pg_query($sql);
    } 
    // funcion ver id de los contactos
    public function getUserById(){    

        $sql ="select *from contactos"." where id='".$this->cleanData($_POST['id'])."'";
        return pg_query($sql);
    } 
    // funcion eliminar contactos
    public function deleteuser(){    
        $sql ="delete from contactos"." where id='".$this->cleanData($_POST['id'])."'";
        return pg_query($sql);
    } 
    // funcion actualizar contactos
    public function updateUser(){       
        $sql = "update contactos set id='".$this->cleanData($_POST['id'])."',name='".$this->cleanData($_POST['name'])."', surname='".$this->cleanData($_POST['surname'])."',phone='".$this->cleanData($_POST['phone'])."' where id = '".$this->cleanData($_POST['id'])."' ";
        return pg_affected_rows(pg_query($sql));        
    }
    // funcion que sanea el codigo para las querys
    public function cleanData($val){
        return pg_escape_string($val);
    }
}
?>