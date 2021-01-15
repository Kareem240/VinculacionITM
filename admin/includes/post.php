<?php 
    include 'scripts.php';
    $scrip = new scripts();
    if($_POST)
    switch($_POST['btnAccion']){
        case 'Agregar':
            $dir='assets/img/carousel/'.$_FILES['imagen']['name'];
            move_uploaded_file($_FILES['imagen']['tmp_name'],"../../".$dir);
            $text=$_POST['text'];
            $scrip->nuevo($dir,$text);
            header("location: http://localhost/vinculacionitm/admin/vistas/editCarru.php ");
        break;

        case 'editar':
            $dir="";
            $id=$_POST['id'];
            $text=$_POST['text'];
            echo "Llego ".$_FILES['imagen']['name'];
            if(empty($_FILES['imagen']['name'])){
                $dir=$_POST['dir'];
                echo "Se va a guardar la misma direccion ".$dir;
            }else{
                $dir='assets/img/carousel/'.$_FILES['imagen']['name'];
                move_uploaded_file($_FILES['imagen']['tmp_name'],"../../".$dir);
                echo "Nueva  direccion ".$dir;
            }
            $scrip->edSlide($id,$dir,$text);
            header("location: http://localhost/vinculacionitm/admin/vistas/editCarru.php ");
        break;

        case 'eliminar':
            $id=$_POST['id'];
            $scrip->eliminar($id);
            echo "<h1>Se elimino el Slide</h1>";
            echo "<a href='http://localhost/vinculacionitm/admin/vistas/editCarru.php' class='badge  badge-success'> Regresar </a>";
        break;

        case 'editarStad':
            $id=$_POST['id'];
            $val=$_POST['val'];
            $scrip->edStad($id,$val);
            header("location: http://localhost/vinculacionitm/admin/vistas/editEstadistica.php ");
        break;
    }else{
        echo "Estas pendejo";
        header("location: http://localhost/vinculacionitm/admin ");
    }
?>