<?php 
    include 'edCarrusel.php';
    $carru = new edCarrusel();
    if($_POST)
    
    switch($_POST['btnAccion']){
        case 'Agregar':
            $ruta='../../assets/img/'.$_FILES['imagen']['name'];
            move_uploaded_file($_FILES['imagen']['tmp_name'],"".$ruta);
            $text=$_POST['text'];
            $id=$_POST['id'];
            $carru->edSlide($id,$ruta,$text);
            echo "Ya se guardo";
            header("location: http://localhost/vinculacionitm/admin ");
        break;
        case 'editar':
        $id=$_POST['id'];
        $text=$_POST['text'];
        $dir='assets/img/carousel/'.$_FILES['imagen']['name'];
            move_uploaded_file($_FILES['imagen']['tmp_name'],"".$dir);
        $carru->edSlide($id,$dir,$text);
        echo "Vamos a cambiar";
        
        break;
        case 'eliminar':
            $id=$_POST['id'];
            $produc->eliminar($id);
            echo "<h1>Usuario eliminado</h1>";
            echo "<a href='http://localhost/proyecto/admin' class='badge  badge-success'> Regresar </a>";
        break;
    }else{
        header("location: http://localhost/vinculacionitm/admin ");
    }
?>