<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Vinculación TecNM</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
    
    
  <!-- Conexion -->  
  <?php include_once 'admin/includes/config.php' ?>


<!--:::Extras, Extras:::-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- Extras-->


  <!-- Favicons prueba -->
  <link href="assets/img/vinculacion.svg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts, esto lo modifique por segunda vez para ver que git siga bien despues de un cambio que hice -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="difusion@itmorelia.edu.mx">difusion@itmorelia.edu.mx</a>
        <i class="icofont-phone"></i> +52 (443) 312 1570
      </div>
      <div class="social-links">
        <a href="https://twitter.com/itmoficial" class="twitter" target="_blank"><i class="icofont-twitter"></i></a>
        <a href="https://www.facebook.com/ITMoreliaOficial" class="facebook" target="_blank"><i class="icofont-facebook"></i></a>
        <a href="https://www.instagram.com/tecnm_campus_morelia/" class="instagram" target="_blank"><i class="icofont-instagram"></i></a>
        
      </div>
    </div>
  </div>
<!-- ======= Top Bar end ======= -->

<!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <img src="assets/img/anfei.png" alt="" width="105" height="83" />
      <h1 class="logo mr-auto"><a href="index.html">VINCULACION ITM</a></h1>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#inicio">Inicio</a></li>
          <li><a href="#noticias">Noticias</a></li>
          <li><a href="#testimonials">Testimonios</a></li>
          <li><a href="#nosotros">Nosotros</a></li>
          <li><a href="#reportes">Reportes</a></li>
          <li><a href="#encuestas">Colabora</a></li>
          <li><a href="#contacto">Contacto</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  
  <?php
    $slides=["","","","",];
    $text=["","","","",];
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
  
  <main id="main">
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
    

    

    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3>SAUL GONZALES</h3>
            <h4>Ingeniero Mecánico</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              ¡Hola! Soy Saul, egresado de la carera de ingeniería mecánica. Me encuentro trabajando para una de las principales manufactureras de mi país residente. ¡Ven y conoce mi historia!
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3>SARA FERNANDEZ</h3>
            <h4>INGENIERA EN SISTEMAS COMPUTACIONALES</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              ¡Buen dia! me llamo sara y egrese como ISC del Instituto Tecnológico de Morelia. ¡Entra y conoce las diferentes empresas para las que he trabajado a lo largo de los años!
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
            <h3>JENNIFER ANDRADE</h3>
            <h4>INGENIERA BIOQUÍMICA</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              ¡Hola! Soy Jenny y acabo de egresar de la carrera de Ingenieria Bioquimica, gracias a un intercambio logre calificar para un puesto en mi actual empresa, ¡Entra y conoce toda la informacion!
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3>BRIAN SANDOVAL</h3>
            <h4>INGENIERO INDUSTRIAL</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              ¡Hola! ¡Hola! Soy Brian y estoy trabajando en distintas empresas en el extranjero como Ingeniero Industrial. Entra y conoce todas las oportunidades que hay para ti.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
            <h3>DIEGO CÁRDENAS</h3>
            <h4>LIC. EN ADMINISTRACIÓN</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              ¡Hola a todos! soy Diego y licenciado en administración, mi trabajo es bastante interesante ya que trabajo para dos empresas en la misma ciudad.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->

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
      
    <br>
      
    <!-- ======= Inicio reportes egresados ======= -->
      
    <?php
    if ($resultado = mysqli_query($link, "SELECT * FROM reportes ")) {
      $cont=0;
    while($rows=mysqli_fetch_array($resultado)){
        $rep[$cont]=$rows[3];
        $des[$cont]=$rows[2];
        $cont++;
    }
    mysqli_free_result($resultado);
    }
    ?>
      <section id="reportes" class="reportes section-bg">
      <div class="container" data-aos="fade-up">
      <div class="section-title"> 
      
        
          <h2>Reportes</h2>
          <h3>REPORTES DE <span>EGRESADOS</span></h3>
          <p>Aqui puedes consultar los reportes de egresados segun la carrera y el año de egreso.</p>
            
        </div>
    
        <section class="pt-5 pb-5">
  <div class="container">
    <div class="row">
        <div class="col-6">
            <h3 class="mb-3">Carousel cards title </h3>
        </div>
        <div class="col-6 text-right">
            <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                <i class="fa fa-arrow-left"></i>
            </a>
            <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                <i class="fa fa-arrow-right"></i>
            </a>
        </div>
        <div class="col-12">
            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">

                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" src="assets/img/Logos/logos%20administraci%C3%B3n.png" style="width: 350px; height: 250px;">
                                    <div class="card-body">
                                        <center><h4 class="card-title">Licenciatura en Administración</h4></center>
                                       <a href="http://localhost/vinculacionitm/<?php echo $rep[0]?>"><center><?php echo $des[0]?></center></a>
                                       <a href="http://localhost/vinculacionitm/<?php echo $rep[1]?>"><center><?php echo $des[1]?></center></a>
                                       <a href="http://localhost/vinculacionitm/<?php echo $rep[2]?>"><center><?php echo $des[2]?></center></a>
                                       <a href="http://localhost/vinculacionitm/<?php echo $rep[3]?>"><center><?php echo $des[3]?></center></a>
												
											

																									  
																															 
																								 
																									   
																								 
												
											  
												 

                                    </div>
                                    
									  
                            </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" src="assets/img/Logos/logos%20contadur%C3%ADa.png" style="width: 350px; height: 250px;">
                                    <div class="card-body">
                                        <h4 class="card-title"><center>Contador Público</center></h4>
                                       <a href="http://localhost/vinculacionitm/<?php echo $rep[4]?>"><center><?php echo $des[4]?></center></a>
                                       <a href="http://localhost/vinculacionitm/<?php echo $rep[5]?>"><center><?php echo $des[5]?></center></a>
                                       <a href="http://localhost/vinculacionitm/<?php echo $rep[6]?>"><center><?php echo $des[6]?></center></a>
                                       <a href="http://localhost/vinculacionitm/<?php echo $rep[7]?>"><center><?php echo $des[7]?></center></a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" src="assets/img/Logos/Logotipo%20Ingenieria%20Bioquimica%20-%20Sin%20lema%20-%20Usos%20Multiples.png" style="width: 350px; height: 250px;">
                                    <div class="card-body">
                                    <h4 class="card-title"><center>Ingeniería Bioquímica</center></h4>
                                    <a href="http://localhost/vinculacionitm/<?php echo $rep[8]?>"><center><?php echo $des[8]?></center></a>
                                       <a href="http://localhost/vinculacionitm/<?php echo $rep[9]?>"><center><?php echo $des[9]?></center></a>
                                       <a href="http://localhost/vinculacionitm/<?php echo $rep[10]?>"><center><?php echo $des[10]?></center></a>
                                       <a href="http://localhost/vinculacionitm/<?php echo $rep[11]?>"><center><?php echo $des[11]?></center></a>   

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">

                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" src="assets//img/Logos/logo%20electr%C3%B3nica%20OK.png" style="width: 350px; height: 250px;">
                                    <div class="card-body">
                                        <h4 class="card-title"><center>Ingeniería Electrónica</center></h4>
                                        <a href="http://localhost/vinculacionitm/<?php echo $rep[12]?>"><center><?php echo $des[12]?></center></a>
                                       <a href="http://localhost/vinculacionitm/<?php echo $rep[13]?>"><center><?php echo $des[13]?></center></a>
                                       <a href="http://localhost/vinculacionitm/<?php echo $rep[14]?>"><center><?php echo $des[14]?></center></a>
                                       <a href="http://localhost/vinculacionitm/<?php echo $rep[15]?>"><center><?php echo $des[15]?></center></a> 
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" src="assets/img/Logos/logos%20el%C3%A9ctrica.png" style="width: 350px; height: 250px;">
                                    <div class="card-body">
                                        <h4 class="card-title"><center>Ingeniería Eléctrica</center></h4>
                                        <a href="http://localhost/vinculacionitm/<?php echo $rep[16]?>"><center><?php echo $des[16]?></center></a>
                                       <a href="http://localhost/vinculacionitm/<?php echo $rep[17]?>"><center><?php echo $des[17]?></center></a>
                                       <a href="http://localhost/vinculacionitm/<?php echo $rep[18]?>"><center><?php echo $des[18]?></center></a>
                                       <a href="http://localhost/vinculacionitm/<?php echo $rep[19]?>"><center><?php echo $des[19]?></center></a> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" src="assets/img/Logos/logos%20industrial.png" style="width: 350px; height: 250px;">
                                    <div class="card-body">
                                        <h4 class="card-title"><center>Ingeniería Industrial</center></h4>
                                        <a href="http://localhost/vinculacionitm/<?php echo $rep[20]?>"><center><?php echo $des[20]?></center></a>
                                       <a href="http://localhost/vinculacionitm/<?php echo $rep[21]?>"><center><?php echo $des[21]?></center></a>
                                       <a href="http://localhost/vinculacionitm/<?php echo $rep[22]?>"><center><?php echo $des[22]?></center></a>
                                       <a href="http://localhost/vinculacionitm/<?php echo $rep[23]?>"><center><?php echo $des[23]?></center></a> 
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">

                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" src="assets/img/Logos/Logo%20Mecatronica.png" style="width: 350px; height: 250px;">
                                    <div class="card-body">
                                        <h4 class="card-title"><center>Ingeniaría Mecatrónica</center></h4>
                                    <a href="http://localhost/vinculacionitm/<?php echo $rep[24]?>"><center><?php echo $des[24]?></center></a>
                                       <a href="http://localhost/vinculacionitm/<?php echo $rep[25]?>"><center><?php echo $des[25]?></center></a>
                                       <a href="http://localhost/vinculacionitm/<?php echo $rep[26]?>"><center><?php echo $des[26]?></center></a>
                                       <a href="http://localhost/vinculacionitm/<?php echo $rep[27]?>"><center><?php echo $des[27]?></center></a> 

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" src="assets/img/Logos/logo%20mec%C3%A1nica.png" style="width: 350px; height: 250px;">
                                    <div class="card-body">
                                        <h4 class="card-title"><center>Ingeniería Mecánica</center></h4>
                                        <a href="http://localhost/vinculacionitm/<?php echo $rep[28]?>"><center><?php echo $des[28]?></center></a>
                                       <a href="http://localhost/vinculacionitm/<?php echo $rep[29]?>"><center><?php echo $des[29]?></center></a>
                                       <a href="http://localhost/vinculacionitm/<?php echo $rep[30]?>"><center><?php echo $des[30]?></center></a>
                                       <a href="http://localhost/vinculacionitm/<?php echo $rep[31]?>"><center><?php echo $des[31]?></center></a> 

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" src="assets/img/Logos/logos%20IGE.png" style="width: 350px; height: 250px;">
                                    <div class="card-body">
                                        <h4 class="card-title"><center>Ingeniería en Gestión Empresarial</center></h4>
                                        <a href="http://localhost/vinculacionitm/<?php echo $rep[32]?>"><center><?php echo $des[32]?></center></a>
                                       <a href="http://localhost/vinculacionitm/<?php echo $rep[33]?>"><center><?php echo $des[33]?></center></a>
                                       <a href="http://localhost/vinculacionitm/<?php echo $rep[34]?>"><center><?php echo $des[34]?></center></a>
                                       <a href="http://localhost/vinculacionitm/<?php echo $rep[35]?>"><center><?php echo $des[35]?></center></a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                      <div class="carousel-item">
                        <div class="row">

                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" src="assets/img/Logos/logo%20materiales.png" style="width: 350px; height: 250px;">
                                    <div class="card-body">
                                        <h4 class="card-title"><center>Ingeniaría en Materiales</center></h4>
                                        <a href="http://localhost/vinculacionitm/<?php echo $rep[36]?>"><center><?php echo $des[36]?></center></a>
                                       <a href="http://localhost/vinculacionitm/<?php echo $rep[37]?>"><center><?php echo $des[37]?></center></a>
                                       <a href="http://localhost/vinculacionitm/<?php echo $rep[38]?>"><center><?php echo $des[38]?></center></a>
                                       <a href="http://localhost/vinculacionitm/<?php echo $rep[39]?>"><center><?php echo $des[39]?></center></a> 

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" src="assets/img/Logos/logo%20isc%202018.png" style="width: 350px; height: 250px;">
                                    <div class="card-body">
                                        <h5 class="card-title"><center>Ingeniería en Sistemas Computacionales</center></h5>
                                     <a href="http://localhost/vinculacionitm/<?php echo $rep[40]?>"><center><?php echo $des[40]?></center></a>
                                       <a href="http://localhost/vinculacionitm/<?php echo $rep[41]?>"><center><?php echo $des[41]?></center></a>
                                       <a href="http://localhost/vinculacionitm/<?php echo $rep[42]?>"><center><?php echo $des[42]?></center></a>
                                       <a href="http://localhost/vinculacionitm/<?php echo $rep[43]?>"><center><?php echo $des[43]?></center></a> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" src="assets/img/Logos/ITIC%20-%20Logo.png" style="width: 350px; height: 250px;">
                                    <div class="card-body">
                                        <h4 class="card-title"><center>Itics</center></h4>
                                    <a href="http://localhost/vinculacionitm/<?php echo $rep[44]?>"><center><?php echo $des[44]?></center></a>
                                       <a href="http://localhost/vinculacionitm/<?php echo $rep[45]?>"><center><?php echo $des[45]?></center></a>
                                       <a href="http://localhost/vinculacionitm/<?php echo $rep[46]?>"><center><?php echo $des[46]?></center></a>
                                       <a href="http://localhost/vinculacionitm/<?php echo $rep[47]?>"><center><?php echo $des[47]?></center></a> 
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" src="assets/img/Logos/Informatica%20-%20Logo.png" style="width: 350px; height: 250px;">
                                    <div class="card-body">
                                        <h4 class="card-title"><center>Informática</center></h4>
                                        <a href="http://localhost/vinculacionitm/<?php echo $rep[48]?>"><center><?php echo $des[48]?></center></a>
                                       <a href="http://localhost/vinculacionitm/<?php echo $rep[49]?>"><center><?php echo $des[49]?></center></a>
                                       <a href="http://localhost/vinculacionitm/<?php echo $rep[50]?>"><center><?php echo $des[50]?></center></a>
                                       <a href="http://localhost/vinculacionitm/<?php echo $rep[51]?>"><center><?php echo $des[51]?></center></a> 
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section> 
       
     

      



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

    <!-- ======= Contact Section ======= -->
    <section id="contacto" class="contacto">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contacto</h2>
          <h3><span>CONTÁCTANOS</span></h3>
          <p>¿Necesitas mas información? No dudes en contactarnos por cualquiera de nuestros medios, estamos para ayudarte.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Nuestra direccion</h3>
              <p>Avenida Tecnológico #1500, Col. Lomas de Santiaguito. Morelia, Mich.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Nuestro correo</h3>
              <p>difusion@itmorelia.edu.mx</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Llamanos</h3>
              <p>+52 (443) 312 1570</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1088.415380615835!2d-101.18578385078953!3d19.722825268546707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0e40be8f4d3b%3A0xf001c256ae856856!2sInstituto%20Tecnol%C3%B3gico%20de%20Morelia!5e0!3m2!1ses-419!2smx!4v1606455435694!5m2!1ses-419!2smx" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Tu nombre" data-rule="minlen:4" data-msg="Por favor ingresa tu nombre" />
                  <div class="validate"></div>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Tu correo electronico" data-rule="email" data-msg="Ingresa un correo valido" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Ingresa un asunto" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor escribenos algo" placeholder="Mensaje"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Cargando</div>
                <div class="error-message"></div>
                <div class="sent-message">Tu mensaje se ha enviado. !Gracias¡</div>
              </div>
              <div class="text-center"><button type="submit">Enviar mensaje</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->


    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Vinculacion ITM<span>.</span></h3>
            <p>
              Avenida Tecnológico #1500 <br> 
              Col. Lomas de Santiaguito. <br>
              Morelia, Mich.
              Mexico<br><br>
              <strong>Telefono:</strong> +52 (443) 312 1570<br>
              <strong>Email:</strong> difusion@itmorelia.edu.mx<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nuestros servicios</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nuestras redes sociales</h4>
            <p>Tambien te puedes enterar de todas las noticias por redes sociales</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Equipo dinamita</span></strong>. Todos los derechos reservados
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>