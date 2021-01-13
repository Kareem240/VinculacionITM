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
	<input type="text" value="<?php echo $row["id"];?>" name="id">
	<input type="text" value="<?php echo $row["dir"];?>" name="titulo">
	<input type="text" value="<?php echo $row["text"];?>" name="texto">
	<input type="submit" name="submit">
</form>

<?php
	
	if(isset($_POST['submit'])){
		$noticia2->edNoticias($row["id"],$_POST['titulo'],$_POST['texto']);
		header("location:editNot2.php");
	}
	
?>
</div>
</body>
</html>