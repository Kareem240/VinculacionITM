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