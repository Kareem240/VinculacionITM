<script src=script/jquery-3.5.1.min.js></script>
<script src=script/sweetalert2.all.min.js></script>

<script> 
function eliminado(){
  Swal.fire({
  title: 'Elemento eliminado!',
  text: 'Cick para continuar',
  icon: 'error',
  confirmButtonText: 'OK'
}).then(function() {
    window.location = "http://localhost/vinculacionitm/admin/";
});
}

function agregado(){
  Swal.fire({
  title: 'Elemento agregado!',
  text: 'Cick para continuar',
  icon: 'success',
  confirmButtonText: 'OK'
}).then(function() {
    window.location = "http://localhost/vinculacionitm/admin/";
});
}

function editado(){
  Swal.fire({
  title: 'Elemento editado!',
  text: 'Cick para continuar',
  icon: 'success',
  confirmButtonText: 'OK'
}).then(function() {
    window.location = "http://localhost/vinculacionitm/admin/";
});
}

</script>

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
            echo ".";
            ?><script>agregado();</script><?php
        break;

        case 'editar':
            $dir="";
            $id=$_POST['id'];
            $text=$_POST['text'];
            if(empty($_FILES['imagen']['name'])){
                $dir=$_POST['dir'];
            }else{
                $dir='assets/img/carousel/'.$_FILES['imagen']['name'];
                move_uploaded_file($_FILES['imagen']['tmp_name'],"../../".$dir);
            }
            $scrip->edSlide($id,$dir,$text);
            echo ".";
            ?><script>editado();</script><?php
           
        break;

        case 'eliminar':
            $id=$_POST['id'];
            $scrip->eliminar($id);
            echo ".";
            ?><script>eliminado();</script><?php
        break;

        case 'editarStad':
            $id=$_POST['id'];
            $val=$_POST['val'];
            $scrip->edStad($id,$val);
            echo ".";
            ?><script>editado();</script><?php
        break;
            
        case 'elimEncues':
            $id=$_POST['id'];
            $scrip->elimEncues($id);
            echo ".";
            ?><script>eliminado();</script><?php
        break;

        
        case 'editEncues':
            $id=$_POST['id'];
            $nombre=$_POST['nombre'];
            $url=$_POST['url'];
            $scrip->edEncues($id,$nombre,$url);
            echo ".";
            ?><script>editado();</script><?php
        break;

        case 'agrEncues':
            $nombre=$_POST['nombre'];
            $url=$_POST['url'];
            $scrip->agrEncues($nombre,$url);
            echo ".";
            ?><script>agregado();</script><?php
        break;

            case 'agregarReporte':
            $dir='assets/img/reportes/'.$_FILES['imagen']['name'];
            move_uploaded_file($_FILES['imagen']['tmp_name'],"../../".$dir);
            $carrera=$_POST['carrera'];
            $descripcion=$_POST['descripcion'];
            $opc=$_POST['opc'];
            $scrip->nuevoReporte($carrera,$descripcion,$dir,$opc);
            echo ".";
            ?><script>agregado();</script><?php
        break;
            
        case 'editarRep':
            $dir="";
            $id=$_POST['id'];
            $descripcion=$_POST['descripcion'];
            $opc=$_POST['opc'];
            echo "Llego ".$_FILES['imagen']['name'];
            if(empty($_FILES['imagen']['name'])){
                $dir=$_POST['dir'];
            }else{
                $dir='assets/img/reportes/'.$_FILES['imagen']['name'];
                move_uploaded_file($_FILES['imagen']['tmp_name'],"../../".$dir);
            }
            $scrip->editarRep($id,$dir,$descripcion);
            echo ".";
            ?><script>editado();</script><?php
        break;

        //DESTACADOS
        case 'AgregarDesta':
            $dirimg='assets/img/destacados/'.$_FILES['imagen']['name'];
            move_uploaded_file($_FILES['imagen']['tmp_name'],"../../".$dirimg);
            $carrera=$_POST['carrera'];
            $nombre=$_POST['nombre'];
            $descripcion=$_POST['text'];
            $scrip->AgregarDesta($nombre,$carrera,$descripcion,$dirimg);
            echo ".";
            ?><script>agregado();</script><?php
        break;

        case 'editarDesta':
            $dir="";
            $id=$_POST['id'];
            $nombre=$_POST['nombre'];
            $carrera=$_POST['carrera'];
            $text=$_POST['text'];
            if(empty($_FILES['imagen']['name'])){
                $dir=$_POST['dir'];
            }else{
                $dir='assets/img/carousel/'.$_FILES['imagen']['name'];
                move_uploaded_file($_FILES['imagen']['tmp_name'],"../../".$dir);
                
            }
            $scrip->edDest($id, $nombre,$carrera, $text, $dir);
            echo ".";
            ?><script>editado();</script><?php
            break;

            case 'eliminarDesta':
                $id=$_POST['id'];
                $scrip->eliminarDesta($id);
                echo ".";
            ?><script>eliminado();</script><?php
            break;
            //noticias
            case 'agregarNoti':
            $title=$_POST['titulo'];
            $descripcion=$_POST['descripcion'];
            $text=$_POST['texto'];
            $scrip->nuevaNoti($title,$descripcion,$text);
            echo ".";
            ?><script>agregado();</script><?php
            break;

            case 'editarNoti':
                $id=$_POST['id'];
                $title=$_POST['titulo'];
                $descripcion=$_POST['descripcion'];
                $text=$_POST['texto'];

                $scrip->edNoticias($id,$title,$descripcion,$text);
                echo ".";
            ?><script>editado();</script><?php
            break;

            case 'eliminarNoti':
                $id=$_POST['id'];
                $scrip->eliminarNoticia($id);
                echo ".";
                ?><script>eliminado();</script><?php
            break;
            case 'editarBol':
                $id=$_POST['id'];
               
                $title=$_POST['titulo'];
                $descripcion=$_POST['descripcion'];
                $text=$_POST['texto'];

                $scrip->editarBolsa($id,$title,$descripcion,$text);
                echo ".";
                ?><script>editado();</script><?php
            break;
            
            case 'agrBolsa':
            $dir='assets/img/bolsa/'.$_FILES['imagen']['name'];
            move_uploaded_file($_FILES['imagen']['tmp_name'],"../../".$dir);
            $title=$_POST['titulo'];
            $descripcion=$_POST['descripcion'];
            $text=$_POST['texto'];
            $scrip->agrBolsa($dir,$title,$descripcion,$text);
            echo ".";
            ?><script>agregado();</script><?php
            break;
    }else{
        header("location: http://localhost/vinculacionitm/admin ");
    }
?>