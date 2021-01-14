<?php 

?>
<?php
class noti2 {
    public function verNoticias(){
        include "config.php";
        $sql = "SELECT * FROM noticias3";
        $result = mysqli_query($link, $sql);
        return $result;
    }
    public function edNoticias($id,$dir,$text){
        include "config.php";
        $sql = "UPDATE noticias3 SET dir = '".$dir."', text = '".$text."' WHERE id =".$id."";
        $result = mysqli_query($link, $sql);
        return $result;
    }
    
    public function select_id($id){
        include "config.php";
        $sql = "SELECT * FROM noticias3 WHERE id =".$id;
        $result = mysqli_query($link, $sql);
        return $result;
    }

    public function agregarNoticias($id,$dir,$text){
        $query = $this->connect()->prepare('INSERT INTO `noticias3` (`id`, `dir`, `text`) VALUES (NULL, :titulo, :texto);');
        $query->execute(['titulo'=>$titulo,'text'=>$texto]);
    }

    public function eliminar($id){
        $query = $this->connect()->prepare('DELETE FROM `noticias3` WHERE `id` = :id; ');
        $query->execute(['id'=>$id ]);
    }

}
?>