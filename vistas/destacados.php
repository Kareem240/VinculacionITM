<?php
    $img=[];
    $nom=[];
    $carrera=[];
    $desc=[];
    $cont=0;
    if ($resultado = mysqli_query($link, "SELECT * FROM destacados")) {
    while($rows=mysqli_fetch_array($resultado)){
        $nom[$cont]=$rows[1];
        $carrera[$cont]=$rows[2];
        $desc[$cont]=$rows[3];
        $img[$cont]=$rows[4];
        $cont++;
    }
    mysqli_free_result($resultado);
    }

    
    ?>
<section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">
      <div class="owl-carousel testimonials-carousel">
    <?php
    for($i=0;$i<$cont;$i++){
        ?>

          <div class="testimonial-item">
            <img src="<?php echo $img[$i]?>" class="testimonial-img" alt="">
            <h3><?php echo $nom[$i]?></h3>
            <h4><?php echo $carrera[$i]?></h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              <?php echo $desc[$i]?>
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        
        <?php
    }
    ?>
    </div>
   </div>
    </section><!-- End Testimonials Section -->
    




        

   