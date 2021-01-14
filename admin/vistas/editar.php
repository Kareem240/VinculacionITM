<body>
<div class="main-wrapper">
<h1>Editar Registros con Función PHP </h1>
<br><br>
<?php 
include_once("../includes/noti2.php");
$id = $_GET['id'];
$noticia2 = new noti2();
$noti=$noticia2->select_id($id);
$row = $noti->fetch_assoc()
?>
<form action="" method="post">
	<input type="text" value="<?php echo $row["id"];?>" name="id" readonly>
	<input type="text" value="<?php echo $row["title"];?>" name="titulo">
	<textarea rows = "5" cols = "10" name = "descripcion"><?php echo $row["descripcion"];?></textarea>
	<textarea rows = "10" cols = "100" name = "texto"><?php echo $row["text"];?></textarea>
	<input type="submit" name="submit">
</form>

<?php
	
	if(isset($_POST['submit'])){
		$noticia2->edNoticias($row["id"],$_POST['titulo'],$_POST['descripcion'],$_POST['texto']);
		header("location:editNot2.php");
	}
	
?>
</div>
</body>
</html>