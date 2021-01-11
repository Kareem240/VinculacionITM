<?php 
include_once "db.php";
?>
<?php

class noticias extends db{
    
    public function verNoticias(){
        $query = $this->connect()->prepare('SELECT * FROM noticias');
        $query->execute();
        $lista=$query->fetchAll();
        return $lista;
    }
    public function editarNoticia($id,$titulo,$descripcion,$contenido){
        $query = $this->connect()->prepare('UPDATE `pagina`.`noticias` SET `titulo` = :titulo , `descripcion` = :descripcion , `contenido` = :contenido;');
        echo "".$id.$titulo.$descripcion.$contenido;
        $query->execute(['id'=>$id,'titulo'=>$titulo,'descripcion'=>$descripcion,'contenido'=>$contenido]);
    }

    public function agregarNoticia($titulo,$descripcion,$contenido){
        $query = $this->connect()->prepare('INSERT INTO `pagina`.`noticias` (`id`, `titulo`, `descripcion`, `contenido`) VALUES (NULL, :titulo, :descripcion, :contenido);');
        $query->execute(['titulo'=>$titulo,'descripcion'=>$descripcion,'contenido'=>$contenido]);
    }

    public function eliminar($id){
        $query = $this->connect()->prepare('DELETE FROM `pagina`.`noticias` WHERE `id` = :id; ');
        $query->execute(['id'=>$id ]);
    }

}
?>