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

    public function edStad($id,$val){
        include "config.php";
        $sql = "UPDATE estadisticas SET val = '".$val."' WHERE id =".$id."";
        echo "Script ".$sql;
        $result = mysqli_query($link, $sql);
        return $result;
    }

    //JP
    public function Desta(){
        include "config.php";    
        $sql = "SELECT * FROM destacados";
        $result = mysqli_query($link, $sql);
        return $result;
    }
}