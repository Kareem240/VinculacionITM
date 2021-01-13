<?php 

?>
<?php
class noti2 {
    public function verNoticias(){
        include "config.php";
        $sql = "SELECT * FROM noticias2";
        $result = mysqli_query($link, $sql);
        return $result;
    }
    public function edNoticias($id,$dir,$text){
        $query = $this->connect()->prepare('UPDATE `noticias2` SET `dir` = :titulo , `text` = :texto WHERE `id` = :id; ');
        echo "".$id.$dir.$text;
        $query->execute(['id'=>$id,'dir'=>$titulo,'text'=>$texto]);
    }

    public function agregarNoticias($id,$dir,$text){
        $query = $this->connect()->prepare('INSERT INTO `noticias2` (`id`, `dir`, `text`) VALUES (NULL, :titulo, :texto);');
        $query->execute(['titulo'=>$titulo,'text'=>$texto]);
    }

    public function eliminar($id){
        $query = $this->connect()->prepare('DELETE FROM `noticias2` WHERE `id` = :id; ');
        $query->execute(['id'=>$id ]);
    }

}
?>