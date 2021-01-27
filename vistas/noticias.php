
       <!-- ======= Inicio noticias ======= -->
       <section id="noticias" class="noticias section-bg">
      

    
      <div class="container" data-aos="fade-up">

        <div class="row">
          <?php 
          if ($res = mysqli_query($link, "SELECT * FROM noticias3 ")) {
          while($row=mysqli_fetch_array($res)){
          ?>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-world"></i></div>
                <h4 id="tNoticia"><a data-toggle="modal" data-target="#exampleModalCenter<?php echo $row[0] ?>"><?php echo $row[1] ?></a></h4>
                <p><?php echo $row[2] ?></p>
                <p id="lMas" data-toggle="modal" data-target="#exampleModalCenter<?php echo $row[0] ?>">LEER MAS</p>
              </div>
            </div>
          <?php } mysqli_free_result($res);} ?>
          
        </div>
      </div>
    </section>

    <!-- Modal -->
    <?php 
    if ($res = mysqli_query($link, "SELECT * FROM noticias3 ")) {
    while($row=mysqli_fetch_array($res)){
    ?>
      <div class="modal fade" id="exampleModalCenter<?php echo $row[0] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $row[1] ?></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p style="text-align: justify;"><?php echo $row[3] ?></p>
            </div>
          </div>
        </div>
      </div>
    <?php } mysqli_free_result($res);} ?>
    <!-- ======= Fin noticias ======= -->
    
      <?php include 'vistas/destacados.php'?>

    <!-- ======= About Section ======= -->
    <section id="nosotros" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Identidad</h2>
          <h3>QUIENES  <span>SOMOS</span></h3>
          <p>El departamento de Gestión Tecnológica y Vinculación es la instancia de Instituto tecnológico de Morelia encargada de estrechar la vinculación entre la institución y aquellos que se formaron en sus aulas.</p>
            <p>Tenemos pasión y dedicación por nuestro trabajo, por eso entregamos en cada una de nuestras oficinas, atención y servicios de calidad.</p>
        </div>

        <div class="row">
          <div class="col-lg-15" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          

        </div>

      </div>
    </section><!-- End About Section -->