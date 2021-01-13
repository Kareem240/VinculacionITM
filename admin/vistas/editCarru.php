<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../index.php");
    exit;
}

 include_once 'head.php'; 
 include_once '../includes/config.php'; 



 /* Consultas de selección que devuelven un conjunto de resultados */
if ($resultado = mysqli_query($link, "SELECT * FROM slides ")) {
    
    /*printf("La selección devolvió %d filas.\n", mysqli_num_rows($resultado));*/

    while($rows=mysqli_fetch_array($resultado)){
        echo "id: ".$rows[0]."<br>";
        echo "dir: ".$rows[1]."<br>";
    }
    mysqli_free_result($resultado);
    
}



mysqli_close($link);

 ?>

    <body>
    
    </body>
</html>
