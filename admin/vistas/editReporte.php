<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../index.php");
    exit;
}

include_once '../includes/scripts.php';
$scrip = new scripts();
$esta=$scrip->verReporte();
 include_once 'head.php'; 
 ?>

<table class="table table-light table-bordered-black">
    <tbody>
        <tr>
            <th width="8%" class="text-center">Carrera</th>
            <th width="8%" class="text-center">Descripcion</th>
            <th width="8%" class="text-center">Descripcion</th>
        </tr>

<?php  while($row = $esta->fetch_assoc()){?>
  <tr>
        
        <td width="15%" class="text-center"> <?php echo  $row['carrera'];   ?></td>
        <td width="15%" class="text-center"> <?php echo  $row['descripcion'];   ?></td>
      
        
       
       <form action="../includes/post.php" enctype="multipart/form-data" method="post">
            <td width="10%" class="text-center"> <input class="form-control" placeholder="<?php echo  $row['descripcion'];   ?>" value="<?php echo  $row['descripcion'];   ?>" name="descripcion" id="descripcion" type="descripcion" ></td>
            <td width="15%" class="text-center">
				<input class="btn btn-primary"  name="imagen" id="imagen" type="file">
            </td>

            

            <td width="10%" class="text-center">
                <input type="hidden" name="id" id="id" value="<?php echo $row['id']?>">
                <input type="hidden" name="dir" id="dir" value="<?php echo $row['dir']?>">
                    <button class="btn btn-primary" 
                        name="btnAccion" 
                        value="editarRep" 
                        type="submit">Editar
                    </button>
                    <br><br><br><br>
            </td>
        </form>
        
        
      
      
            
      
</td>
            


        <?php } ?>
    
    </tbody>
</table>
<?php include_once 'agrReporte.php'; ?>