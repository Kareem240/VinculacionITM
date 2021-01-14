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
<<<<<<< HEAD
            echo "Ya se guardo";
            header("location: http://localhost/vinculacionitm/admin ");
=======
            header("location: http://localhost/vinculacionitm/admin");
>>>>>>> 42ae6ce42b031d9184553db87009d23f34f1cf88
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