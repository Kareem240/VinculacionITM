<?php 
    include 'edCarrusel.php';
    $carru = new edCarrusel();
    echo "Por si entrassss".$_POST['btnAccion'];
    if($_POST)
    switch($_POST['btnAccion']){
        case 'Agregar':
            $dir='assets/img/carousel/'.$_FILES['imagen']['name'];
            move_uploaded_file($_FILES['imagen']['tmp_name'],"../../".$dir);
            $text=$_POST['text'];
            $carru->nuevo($dir,$text);
            /*header("location: http://localhost/vinculacionitm/admin/vistas/editCarru.php ");*/
        break;
        case 'editar':
        $id=$_POST['id'];
        $text=$_POST['text'];
        $dir='assets/img/carousel/'.$_FILES['imagen']['name'];
            move_uploaded_file($_FILES['imagen']['tmp_name'],"../../".$dir);
        $carru->edSlide($id,$dir,$text);
        echo "La direccion final es :".$dir;
        header("location: http://localhost/vinculacionitm/admin/vistas/editCarru.php ");
        
        break;

        case 'eliminar':
            $id=$_POST['id'];
            $carru->eliminar($id);
            echo "<h1>Usuario eliminado</h1>";
            echo "con el id".$id;
            echo "<a href='http://localhost/vinculacionitm/admin/vistas/editCarru.php' class='badge  badge-success'> Regresar </a>";
        break;
    }else{
        echo "Estas pendejo";
        /*header("location: http://localhost/vinculacionitm/admin ");*/
    }
?>