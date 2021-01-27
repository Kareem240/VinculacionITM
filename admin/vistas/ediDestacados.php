<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../index.php");
    exit;
}

include_once '../includes/scripts.php';
$scrip = new scripts();
$carru=$scrip->Desta();
 include_once 'head.php'; 
 ?>

<!--JPPPPP-->
<table class="table table-light table-bordered-black">
    <tbody>
        <tr>
            <th width="5%" class="text-center">Imagen actual</th>
            <th width="5%" class="text-center">Nombre</th>
            <th width="5%" class="text-center">Carrera</th>
            <th width="5%" class="text-center">Descripcion</th>
        </tr>

<?php  while($row = $carru->fetch_assoc()){?>
  <tr>
        <form action="../includes/post.php" enctype="multipart/form-data" method="post">
            <td width="1%">
                <img src="../../<?php echo $row['dirimg'];?>"  width="100" height="100" >
            </td>
            <td width="10%" class="text-center">
            <input class="form-control" placeholder="<?php echo  $row['nombre'];   ?>"  value="<?php echo  $row['nombre']; ?>" name="nombre" id="nombre" type="text" ></td>
            <!--<td width="15%" class="text-center">-->

            <td width="10%" class="text-center">
            <input class="form-control" placeholder="<?php echo  $row['carrera'];   ?>"  value="<?php echo  $row['carrera']; ?>" name="carrera" id="carrera" type="text" ></td>
            <!--<td width="15%" class="text-center">-->

            <td width="30%" class="text-center">
            <input class="form-control" placeholder="<?php echo  $row['text'];   ?>"  value="<?php echo  $row['text']; ?>" name="text" id="text" type="text" ></td>
            
            <td width="30%" class="text-center">
				<input class="btn btn-primary"  name="imagen" id="imagen" type="file">
            </td>

            

            <td width="15%" class="text-center">
                <input type="hidden" name="id" id="id" value="<?php echo $row['id']?>">
                <input type="hidden" name="dir" id="dirimg" value="<?php echo $row['dirimg']?>">
                    <button class="btn btn-primary" 
                        name="btnAccion" 
                        value="editarDesta" 
                        type="submit">Editar
                    </button>
                    <button class="btn btn-warning" 
                        name="btnAccion" 
                        value="eliminarDesta" 
                        type="submit">eliminar
                    </button>
                    <br><br><br><br>
            </td>
        </form>
    
</td>
            
        <?php } ?>
           
    </tbody>
</table>
<?php include_once 'agrDesta.php'; ?>
</body>
 

