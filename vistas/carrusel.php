<?php
    $slides=[];
    $text=[];
    $cont=0;
    if ($resultado = mysqli_query($link, "SELECT * FROM slides ")) {
    while($rows=mysqli_fetch_array($resultado)){
        $slides[$cont]=$rows[1];
        $text[$cont]=$rows[2];
        $cont++;
    }
    mysqli_free_result($resultado);
    }
    ?>
  
  

    <!-- Inicia la bienvenida-->
    
    <section id="inicio" class="inicio">
      <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">

          <!-- Indicadores -->
          <ol class="carousel-indicators">
            
            <?php for($i=0;$i<$cont;$i++) {?>
                <li data-target="#myCarousel" data-slide-to="<?php echo $i?>" <?php if($i==0):?>class="active"> <?php endif ?></li>
              <?php }?>
          </ol>
      
          <!-- Slides -->
          <div class="carousel-inner">
            <?php for($i=0;$i<$cont;$i++) {?>
              <?php if($i==0):?><div class="item active"><?php else:?><div class="item"><?php endif?>
                <img src="<?php echo $slides[$i] ?>" alt="<?php echo $text[$i]?>" style="width:100%;">
                <div class="carousel-caption d-none d-md-block">
                  <p><?php echo $text[$i]?></p>
                </div>
              </div>
            <?php }?>
          </div>

          <!-- control izquierda -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <!-- control derecha -->
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section><!--Fin de la bienvenida -->