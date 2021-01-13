<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../index.php");
    exit;
}
include_once '../includes/noti2.php';
$noticia2 = new noti2();
$noti=$noticia2->verNoticias();
 include_once 'head.php'; 
 ?>

    <body>
        <table border="1" width="100%">
			<tr>
				<th width="15%">ID</th>
				<th width="15%">Titulo</th>
				<th width="45%">Texto</th>
				<th width="15%">Opcion</th>
			</tr>
			<?php 
			while($row = $noti->fetch_assoc()){
			?>
				<tr>
					<td><?php echo $row["id"];?></td>
					<td><?php echo $row["dir"];?></td>
					<td><?php echo $row["text"];?></td>
				<td>
					<a class="btn btn-primary" href="editar.php?id=<?php echo $row["id"]; ?>">
					<i>EDITAR</i></a>
	        	</td>
				</tr>
			<?php } ?>
		</table>
    </body>
</html>