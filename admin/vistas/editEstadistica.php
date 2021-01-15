<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../index.php");
    exit;
}

include_once '../includes/scripts.php';
$scrip = new scripts();
$info=$scrip->verEstadis();
 include_once 'head.php'; 
 ?>


<table class="table table-light table-bordered-black">
    <tbody>
        <tr>
            <th width="10%" class="text-center">Nombre</th>
            <th width="10%" class="text-center">Valor</th>
        </tr>

<?php  while($row = $info->fetch_assoc()){?>
  <tr>
        <form action="../includes/post.php" enctype="multipart/form-data" method="post">
            <td width="15%" class="text-center"> <?php echo  $row['estad'];   ?></td>
            <td width="15%" class="text-center"> <input class="form-control" placeholder="<?php echo  $row['val'];   ?>" value="<?php echo  $row['val'];   ?>" name="val" id="val" type="number" ></td>

            <td width="10%" class="text-center">
                <input type="hidden" name="id" id="id" value="<?php echo $row['id']?>">
                    <button class="btn btn-primary" 
                        name="btnAccion" 
                        value="editarStad" 
                        type="submit">Editar
                    </button>
            </td>
        </form>
    
</td>
            


        <?php } ?>
        
          
           
    </tbody>
</table>
</body>
 