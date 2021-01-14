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
    public function edNoticias($id,$title,$descripcion,$text){
        include "config.php";
        $sql = "UPDATE noticias3 SET title = '".$title."', descripcion = '".$descripcion."', text = '".$text."' WHERE id =".$id."";
        $result = mysqli_query($link, $sql);
        return $result;
    }
    
    public function select_id($id){
        include "config.php";
        $sql = "SELECT * FROM noticias3 WHERE id =".$id;
        $result = mysqli_query($link, $sql);
        return $result;
    }
}
?>