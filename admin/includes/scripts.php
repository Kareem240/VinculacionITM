<?php

class scripts {
    
    public function verNoticias(){
        include "config.php";    
        $sql = "SELECT * FROM slides";
        $result = mysqli_query($link, $sql);
        return $result;
    }
    public function edSlide($id,$dir,$text){
        include "config.php";
        $sql = "UPDATE slides SET dir = '".$dir."', text = '".$text."' WHERE id =".$id."";
        $result = mysqli_query($link, $sql);
        return $result;
    }
    
    public function select_id($id){
        include "config.php";
        $sql = "SELECT * FROM slides WHERE id =".$id;
        $result = mysqli_query($link, $sql);
        return $result;
    }

    public function nuevo($dir,$text){
        include "config.php";
        $sql = "INSERT INTO slides (id, dir,text) VALUES (NULL, '".$dir."', '".$text."');";
        $result = mysqli_query($link, $sql);
        return $result;
    }

    public function eliminar($id){
        include "config.php";
        $sql = "DELETE FROM slides  WHERE id =".$id."";
        $result = mysqli_query($link, $sql);
        return $result;
    }

    public function verEstadis(){
        include "config.php";
        $sql = "SELECT * FROM estadisticas";
        $result = mysqli_query($link, $sql);
        return $result;
    }

    public function Desta(){
        include "config.php";
        $sql = "SELECT * FROM destacados";
        $result = mysqli_query($link, $sql);
        return $result;
    }

    public function AgregarDesta($nombre, $carrera, $desc, $dir){
        include "config.php";
        $sql = "INSERT INTO destacados (id, nombre, carrera, text, dir ) VALUES (NULL, '".$nombre."', '".$carrera."', '".$desc."', '".$dir."');";
        $result = mysqli_query($link, $sql);
        return $result;
    }

    public function edStad($id,$val){
        include "config.php";
        $sql = "UPDATE estadisticas SET val = '".$val."' WHERE id =".$id."";
        echo "Script ".$sql;
        $result = mysqli_query($link, $sql);
        return $result;
    }
    
    public function verReporte(){
        include "config.php";
        $sql = "SELECT * FROM reportes";
        $result = mysqli_query($link, $sql);
        return $result;
    }
    // modificar esta en descripcion
    public function editarRep($id,$dir,$descripcion){
        include "config.php";
        $sql = "UPDATE reportes SET dir = '".$dir."', descripcion = '".$descripcion."' WHERE id =".$id."";
        $result = mysqli_query($link, $sql);
        return $result;
    }
    
     public function nuevoReporte($carrera,$descripcion,$dir,$opc){
        include "config.php";
        $sql = "INSERT INTO reportes (id, carrera, descripcion, dir, opc) VALUES (NULL, NULL ,'".$descripcion."','".$dir."' ,NULL);";
        $result = mysqli_query($link, $sql);
        return $result;
    }
    //Noticias
    public function verNoticias2(){
        include "config.php";
        $sql = "SELECT * FROM noticias3";
        $result = mysqli_query($link, $sql);
        return $result;
    }
    public function nuevaNoti($title,$descripcion,$text){
        include "config.php";
        $sql = "INSERT INTO noticias3 (id,title,descripcion,text) VALUES (NULL,'".$title."', '".$descripcion."', '".$text."');";
        $result = mysqli_query($link, $sql);
        return $result;
    }
    public function edNoticias($id,$title,$descripcion,$text){
        include "config.php";
        $sql = "UPDATE noticias3 SET title = '".$title."', descripcion = '".$descripcion."', text = '".$text."' WHERE id =".$id."";
        $result = mysqli_query($link, $sql);
        return $result;
    }
    public function eliminarNoticia($id){
        include "config.php";
        $sql = "DELETE FROM noticias3  WHERE id =".$id."";
        $result = mysqli_query($link, $sql);
        return $result;
    }
}