<section id="estadisticas" class="estadisticas section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          
          <h3><span>Estadisticas</span></h3>
          <p>Estas son las principales estadisticas de nuestra area.</p>
        </div>

        <?php
    if ($resultado = mysqli_query($link, "SELECT * FROM estadisticas ")) {
      $cont=0;
    while($rows=mysqli_fetch_array($resultado)){
        $nom[$cont]=$rows[1];
        $val[$cont]=$rows[2];
        $cont++;
    }
    mysqli_free_result($resultado);
    }
    ?>

    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row skills-content">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill"><?php echo $nom[0]?> <i class="val"><?php echo $val[0]?></i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $val[0]?>" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill"><?php echo $nom[1]?> <i class="val"><?php echo $val[1]?></i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $val[1]?>" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill"><?php echo $nom[2]?><i class="val"><?php echo $val[2]?></i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $val[2]?>" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          

        </div>

      </div>
    </section><!-- End Skills Section -->
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="icofont-simple-smile"></i>
              <span data-toggle="counter-up"><?php echo $val[3]?></span>
              <p><?php echo $nom[3]?></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="icofont-document-folder"></i>
              <span data-toggle="counter-up"><?php echo $val[4]?></span>
              <p><?php echo $nom[4]?></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-live-support"></i>
              <span data-toggle="counter-up"><?php echo $val[5]?></span>
              <p><?php echo $nom[5]?></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-users-alt-5"></i>
              <span data-toggle="counter-up"><?php echo $val[6]?></span>
              <p><?php echo $nom[6]?></p>
            </div>
          </div>

        </div>

      </div>
    </section>

      </div>
    </section>
    <!-- End Frequently Asked Questions Section -->