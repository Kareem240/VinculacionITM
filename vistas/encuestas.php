<!-- Seccion de egresados -->
<section id="encuestas" class="encuestas section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          
          <h3><span>Egresados</span></h3>
          <p>¿Eres egresado del ITM? Puedes participar en nuestra encuesta para mejorar la informacion de esta pagina, ademas si quieres conocer ofertas de empleo aqui lo puedes consultar.</p>
          
        </div>
        <div class="row">
          <div class="col-lg-15" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/egresados.png" class="img-fluid" alt="">
          </div>
        
        <?php
    $nom=[];
    $url=[];
    $cont=0;
    if ($resultado = mysqli_query($link, "SELECT * FROM encuestas ")) {
    while($rows=mysqli_fetch_array($resultado)){
        $nom[$cont]=$rows[1];
        $url[$cont]=$rows[2];
        $cont++;
    }
    mysqli_free_result($resultado);
    }
    ?>
        <ul class="faq-list" data-aos="fade-down" data-aos-delay="100">
          <li>
            <a data-toggle="collapse" href="#faq2" class="collapsed"><strong>Encuestas</strong><i class="icofont-simple-up"></i></a>
            <div id="faq2" class="collapse" data-parent=".faq-list">
              <br>
              <?php for($i=0;$i<$cont;$i++){?>
                <p>
                <a href="<?php echo $url[$i] ?>" target="_BLANK"><u><?php echo $nom[$i]?></u></a>
              </p>
                <?php }?>
            </div>
          </li>
          <br><br>
          
          <li>
            <a>¿Quieres cononocer la bolsa de trabajo para nuestros egresados? Entra </a><a  href="vistas/bolsa.php" ><strong>aqui</strong></a>
            <div id="faq2" class="collapse" data-parent=".faq-list">
              <br>
              
            </div>
          </li>
          

        </ul>

      </div>
    </section>
    <!--Seccion de egresados -->