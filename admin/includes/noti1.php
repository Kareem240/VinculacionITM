<?php 
include_once "config.php";

class noti1 extends config{
    
    public function verNoricias(){
        $query = $this->connect()->prepare('SELECT * FROM noticias1');
        $query->execute();
        $lista=$query->fetchAll();
        return $lista;
    }

    public function edNoticias($id,$nombre,$descripcion,$precio,$dir){
        $query = $this->connect()->prepare('UPDATE `vinculacion`.`noticias1` SET `dir` = :nombre , `descripcion` = :descripcion , `precio` = :costo , `img` = :dir WHERE `id` = :id; ');
        echo "".$id.$nombre.$descripcion.$precio.$dir;
        $query->execute(['id'=>$id,'nombre'=>$nombre,'descripcion'=>$descripcion,'costo'=>$precio,'dir'=>$dir ]);
    }
    public function pagar($nombre,$id,$precio,$usuario){
            $query = $this->connect()->prepare('INSERT INTO `tiendap`.`ventas` (`id`, `usuario`, `costo`, `producto`) VALUES (NULL,:usuario, :costo, :id); ');
            $query->execute(['usuario'=>$usuario ,'costo'=>$precio,'id'=>$id ]);
        
    }

    public function agregarProd($nombre,$descripcion,$precio,$ruta){
        $query = $this->connect()->prepare('INSERT INTO `tiendap`.`productos` (`id`, `nombre`, `descripcion`, `precio`, `img`) VALUES (NULL, :nombre, :descripcion, :precio, :img);');
        $query->execute(['nombre'=>$nombre,'descripcion'=>$descripcion,'precio'=>$precio,'img'=>$ruta ]);
    }

    public function eliminar($id){
        $query = $this->connect()->prepare('DELETE FROM `tiendap`.`productos` WHERE `id` = :id; ');
        $query->execute(['id'=>$id ]);
    }

}
?>