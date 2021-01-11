<?php
    include_once 'head.php';
    include_once '../includes/noticias.php';
    $noticia = new noticias();
    $noti=$noticia->verNoticias();

?>
<body>
<table class="table table-light table-bordered-black">
    <tbody>
        <tr>
            <th width="15%" class="text-center">Titulo</th>
            <th width="15%" class="text-center">Descripcion</th>
            <th width="15%" class="text-center">Contenido</th>
        </tr>

<?php  foreach($not as $noti){?>
  <tr>
            <form action="../includes/edNotic.php" enctype="multipart/form-data" method="post">
            <td width="15%" class="text-center"><input class="form-control" placeholder="<?php echo  $noti['titulo'];   ?>" name="nombre" id="titulo" type="text" ></td>
            <td width="15%" class="text-center"> <input class="form-control" placeholder="<?php echo  $noti['descripcion'];   ?>" name="descripcion" id="descripcion" type="text" ></td>
            <td width="15%" class="text-center"><input class="form-control" placeholder="<?php echo  $noti['contenido'];   ?>" name="precio" id="contenido" type="text" > </td>
            <td width="15%" class="text-center">
          <input type="hidden" name="id" id="id" value="<?php echo $produ['id']?>">
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
<?php include_once 'nuevo.php'; ?>
</body>
 