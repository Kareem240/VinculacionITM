<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../index.php");
    exit;
}
 include_once 'head.php'; ?>

<body>
    <div class="page-header">
        <br><br><br>
        <h1 style="text-indent: 80px">Hola, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Bienvenid@ al administrador de Vinculacion ITM.</h1>
        
    </div>
  <!--  <p>
        <a href="reset-password.php" class="btn btn-warning">Cambia tu contraseña</a>
    </p> -->


</body>
</html>