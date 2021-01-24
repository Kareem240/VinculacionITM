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
            
        case 'elimEncues':
            $id=$_POST['id'];
            $scrip->elimEncues($id);
            header("location: http://localhost/vinculacionitm/admin/vistas/editEncues.php ");
        break;

        
        case 'editEncues':
            $id=$_POST['id'];
            $nombre=$_POST['nombre'];
            $url=$_POST['url'];
            $scrip->edEncues($id,$nombre,$url);
            header("location: http://localhost/vinculacionitm/admin/vistas/editEncues.php ");
        break;

        case 'agrEncues':
            $nombre=$_POST['nombre'];
            $url=$_POST['url'];
            $scrip->agrEncues($nombre,$url);
            header("location: http://localhost/vinculacionitm/admin/vistas/editEncues.php ");
        break;

            case 'agregarReporte':
            $dir='assets/img/reportes/'.$_FILES['imagen']['name'];
            move_uploaded_file($_FILES['imagen']['tmp_name'],"../../".$dir);
            $carrera=$_POST['carrera'];
            $descripcion=$_POST['descripcion'];
            $opc=$_POST['opc'];
            $scrip->nuevoReporte($carrera,$descripcion,$dir,$opc);
            header("location: http://localhost/vinculacionitm/admin/vistas/editReporte.php ");
        break;
            
        case 'editarRep':
            $dir="";
            $id=$_POST['id'];
            $descripcion=$_POST['descripcion'];
            $opc=$_POST['opc'];
            echo "Llego ".$_FILES['imagen']['name'];
            if(empty($_FILES['imagen']['name'])){
                $dir=$_POST['dir'];
                echo "Se va a guardar la misma direccion ".$dir;
            }else{
                $dir='assets/img/reportes/'.$_FILES['imagen']['name'];
                move_uploaded_file($_FILES['imagen']['tmp_name'],"../../".$dir);
                echo "Nueva  direccion ".$dir;
            }
            $scrip->editarRep($id,$dir,$descripcion);
            header("location: http://localhost/vinculacionitm/admin/vistas/editReporte.php ");
        break;

        //DESTACADOS
        case 'AgregarDesta':
            echo "si entro";
            $dir='assets/img/destacados/'.$_FILES['imagen']['name'];
            move_uploaded_file($_FILES['imagen']['tmp_name'],"../../".$dirimg);
            $carrera=$_POST['carrera'];
            $nombre=$_POST['nombre'];
            $descripcion=$_POST['text'];
            $dirimg=$_POST['dirimg'];
            $scrip->AgregarDesta($nombre,$carrera,$descripcion,$dirimg);
            header("location: http://localhost/vinculacionitm/admin/vistas/ediDestacados.php ");
        break;

        case 'editarDesta':
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
            header("location: http://localhost/vinculacionitm/admin/vistas/editDestacados.php ");

            case 'eliminarDesta':
                $id=$_POST['id'];
                $scrip->eliminar($id);
                echo "<h1>Se elimino el Slide</h1>";
                echo "<a href='http://localhost/vinculacionitm/admin/vistas/editDestacados.php' class='badge  badge-success'> Regresar </a>";
            break;
            //noticias
            case 'agregarNoti':
            $title=$_POST['titulo'];
            $descripcion=$_POST['descripcion'];
            $text=$_POST['texto'];
            $scrip->nuevaNoti($title,$descripcion,$text);
            header("location: http://localhost/vinculacionitm/admin/vistas/editNot2.php ");
            break;

            case 'editarNoti':
                $id=$_POST['id'];
                $title=$_POST['titulo'];
                $descripcion=$_POST['descripcion'];
                $text=$_POST['texto'];

                $scrip->edNoticias($id,$title,$descripcion,$text);
                header("location: http://localhost/vinculacionitm/admin/vistas/editNot2.php ");
            break;

            case 'eliminarNoti':
                $id=$_POST['id'];
                $scrip->eliminarNoticia($id);
                header("location: http://localhost/vinculacionitm/admin/vistas/editNot2.php ");
            break;
    }else{
        echo "Estas pendejo";
        header("location: http://localhost/vinculacionitm/admin ");
    }
?>