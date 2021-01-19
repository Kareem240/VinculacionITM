<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../index.php");
    exit;
}
include_once '../includes/scripts.php';
$noticia2 = new scripts();
$noti=$noticia2->verNoticias2();
 include_once 'head.php'; 
 ?>

    <body>
    	<?php 
			while($row = $noti->fetch_assoc()){
			?>
    	<form action="../includes/post.php" enctype="multipart/form-data" method="post">
        <table width="100%" class="table table-light table-bordered-black">
			<tr>
				<th width="10%" class="text-center">Titulo</th>
				<th width="10%" class="text-center">Descripcion</th>
				<th width="40%" class="text-center">Texto</th>
				<th width="15%" class="text-center">Opcion</th>
			</tr>
			
				<tr>
					<input type="hidden" value="<?php echo $row["id"];?>" name="id" readonly>
					<td class="text-center"><input class="form-control" type="text" value="<?php echo $row["title"];?>" name="titulo"></td>
					<td class="text-center"><textarea class="form-control" rows = "5" cols = "10" name = "descripcion" value="<?php echo $row["descripcion"];?>"><?php echo $row["descripcion"];?></textarea></td>
					<td class="text-center"><textarea class="form-control" rows = "10" cols = "100" name = "texto" value="<?php echo $row["text"];?>"><?php echo $row["text"];?></textarea></td>
				<td class="text-center">

					<button class="btn btn-primary" 
                        name="btnAccion" 
                        value="editarNoti" 
                        type="submit">Guardar
                    </button>
                    <button class="btn btn-warning" 
                        name="btnAccion" 
                        value="eliminarNoti" 
                        type="submit">Eliminar
                    </button>
	        	</td>
	        	</td>
				</tr>
			
		</table>
		</form>
		<?php } ?>
		<?php include_once 'agregarNoti.php'; ?>
    </body>
</html>