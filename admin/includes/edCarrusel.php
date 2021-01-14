<?php

class edCarrusel {
    
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

    public function agregarNoticias($id,$dir,$text){
        $query = $this->connect()->prepare('INSERT INTO `slides` (`id`, `dir`, `text`) VALUES (NULL, :titulo, :texto);');
        $query->execute(['titulo'=>$titulo,'text'=>$texto]);
    }

    public function eliminar($id){
        $query = $this->connect()->prepare('DELETE FROM `slides` WHERE `id` = :id; ');
        $query->execute(['id'=>$id ]);
    }

}
?>