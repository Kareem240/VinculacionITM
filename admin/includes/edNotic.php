<?php 
    include 'noticias.php';
    $notic = new noticias();
    if($_POST)
    
    switch($_POST['btnAccion']){
        case 'Agregar noticia':
            $titulo=$_POST['titulo'];
            $descripcion=$_POST['descripcion'];
            $contenido=$_POST['contenido'];
            echo "<h1>Producto agregado exitosamente</h1>";
        break;
        case 'editar':
            $id=$_POST['id'];
            $nombre=$_POST['nombre'];
            $descripcion=$_POST['descripcion'];
            $contenido=$_POST['contenido'];
            echo "<h1>".$dir."<h1>";
        $notic->edProducto($id,$titulo,$descripcion,$contenido);
        header("location: http://localhost/proyecto/admin ");
        break;
        case 'eliminar':
            $id=$_POST['id'];
            $notic->eliminar($id);
            echo "<h1>Noticia eliminada</h1>";
            echo "<a href='http://localhost/proyecto/admin' class='badge  badge-success'> Regresar </a>";
        break;
    }else{
        header("location: http://localhost/proyecto/admin ");
    }
?>