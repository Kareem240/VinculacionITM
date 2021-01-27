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
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
          </ol>
      
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="<?php echo $slides[0] ?>" alt="Los Angeles" style="width:100%;">
            </div>
      
            <div class="item">
              <img src="<?php echo $slides[1] ?>" alt="Chicago" style="width:100%;">
            </div>
          
            <div class="item">
              <img src="<?php echo $slides[2] ?>" alt="New york" style="width:100%;">
            </div>
            <div class="item">
              <img src="<?php echo $slides[3] ?>" alt="New york" style="width:100%;">
            </div>
          </div>
      
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section><!--Fin de la bienvenida -->