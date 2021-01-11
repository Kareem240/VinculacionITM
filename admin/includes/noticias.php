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
        $query = $this->connect()->prepare('UPDATE `tiendap`.`productos` SET `nombre` = :nombre , `descripcion` = :descripcion , `precio` = :costo , `img` = :dir WHERE `id` = :id; ');
        echo "".$id.$nombre.$descripcion.$precio.$dir;
        $query->execute(['id'=>$id,'nombre'=>$nombre,'descripcion'=>$descripcion,'costo'=>$precio,'dir'=>$dir ]);
    }

    public function agregarProd($titulo,$descripcion,$contenido){
        $query = $this->connect()->prepare('INSERT INTO `tiendap`.`productos` (`id`, `nombre`, `descripcion`, `precio`, `img`) VALUES (NULL, :nombre, :descripcion, :precio, :img);');
        $query->execute(['nombre'=>$nombre,'descripcion'=>$descripcion,'precio'=>$precio,'img'=>$ruta ]);
    }

    public function eliminar($id){
        $query = $this->connect()->prepare('DELETE FROM `tiendap`.`productos` WHERE `id` = :id; ');
        $query->execute(['id'=>$id ]);
    }

}
?>