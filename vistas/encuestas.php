<!-- preguntas frecuentes -->
<section id="encuestas" class="encuestas section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          
          <h3><span>Encuestas</span></h3>
          <p>Nos encantaría saber desde tu criterio cómo es que ha sido tu experiencia con el uso de esta herramienta que hemos creamos para beneficio tuyo.</p>
        </div>
        <?php
    if ($resultado = mysqli_query($link, "SELECT * FROM encuestas ")) {
  
    while($rows=mysqli_fetch_array($resultado)){
        $nom=$rows[1];
        $url=$rows[2];
    }
    mysqli_free_result($resultado);
    }
    ?>
        <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">

          <li>
            <a data-toggle="collapse" class="" href="#faq1"><strong><?php echo $nom?></strong><i class="icofont-simple-up"></i></a>
            <div id="faq1" class="collapse show" data-parent=".faq-list">
              <br>
              <p>
                <a href="<?php echo $url?>" target="_BLANK"><u>Encuesta </u></a>
                
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq2" class="collapsed"><strong>¿Qué te gustaría que nuestro sitio tuviera?</strong><i class="icofont-simple-up"></i></a>
            <div id="faq2" class="collapse" data-parent=".faq-list">
              <br>
              <p>
                <a href="https://forms.gle/wKW8wHF66aRCjqXr7" target="_BLANK"><u>Encuesta en Google Forms</u></a>
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section>
    <!-- End Frequently Asked Questions Section -->