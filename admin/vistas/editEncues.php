<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../index.php");
    exit;
}

include_once '../includes/scripts.php';
$scrip = new scripts();
$info=$scrip->verEncues();
 include_once 'head.php'; 
 ?>


<table class="table table-light table-bordered-black">
    <tbody>
        <tr>
            <th width="10%" class="text-center">Nombre</th>
            <th width="10%" class="text-center">URL</th>
        </tr>

<?php  while($row = $info->fetch_assoc()){?>
  <tr>
        <form action="../includes/post.php" enctype="multipart/form-data" method="post">
        <td width="15%" class="text-center"> <input class="form-control" placeholder="<?php echo  $row['nombre'];   ?>" value="<?php echo  $row['nombre'];   ?>" name="nombre" id="nombre" type="text" ></td>
            <td width="15%" class="text-center"> <input class="form-control" placeholder="<?php echo  $row['url'];   ?>" value="<?php echo  $row['url'];   ?>" name="url" id="url" type="text" ></td>

            <td width="10%" class="text-center">
                <input type="hidden" name="id" id="id" value="<?php echo $row['id']?>">
                    <button class="btn btn-primary" 
                        name="btnAccion" 
                        value="editEncues" 
                        type="submit">Editar
                    </button>
                    <button class="btn btn-warning" 
                        name="btnAccion" 
                        value="elimEncues" 
                        type="submit">Eliminar
                    </button>
            </td>
        </form>
    
</td>
            


        <?php } ?>
        
          
           
    </tbody>
</table>
<?php include_once 'agrEncues.php'; ?>
</body>
 