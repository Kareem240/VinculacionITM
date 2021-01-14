<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../index.php");
    exit;
}

include_once '../includes/edCarrusel.php';
$carrus = new edCarrusel();
$carru=$carrus->verNoticias();
 include_once 'head.php'; 
 ?>


<table class="table table-light table-bordered-black">
    <tbody>
        <tr>
            <th width="15%" class="text-center">Direccion</th>
            <th width="15%" class="text-center">Descripcion</th>
        </tr>

<?php  while($row = $carru->fetch_assoc()){?>
  <tr>
            <form action="../includes/carrusel.php" enctype="multipart/form-data" method="post">
            <td width="15%" class="text-center"><input class="form-control" placeholder="<?php echo  $row['dir'];   ?>" value="<?php echo  $row['dir'];   ?>" name="dir" id="dir" type="text" ></td>
            <td width="15%" class="text-center"> <input class="form-control" placeholder="<?php echo  $row['text'];   ?>" value="<?php echo  $row['text'];   ?>" name="text" id="text" type="text" ></td>
            <td width="15%" class="text-center">
												<input class="btn btn-primary"  name="imagen" id="imagen" type="file">
            </td>

            <td width="15%" class="text-center">
          <input type="hidden" name="id" id="id" value="<?php echo $row['id']?>">
          <input type="hidden" name="dir" id="dir" value="<?php echo $row['dir']?>">
          <button class="btn btn-primary" 
              name="btnAccion" 
              value="editar" 
              type="submit">Editar
              </button>
              <button class="btn btn-warning" 
              name="btnAccion" 
              value="eliminar" 
              type="submit">eliminar
              </button>
          </form>
          </td>
            <tr>
            <td></td>
        </tr>
        <tr>  
        </tr>
        <?php } ?>
        
          
           
    </tbody>
</table>
</body>
 

