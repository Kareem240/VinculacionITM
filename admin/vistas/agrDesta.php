<div class="container" style="margin-top:40px" >
		<div class="row">
			<div class="col-11" >
				<div class="panel panel-default"  >
					<div class="panel-heading">
						<h1>Agregar Slide</h1>
					</div>
					<div class="panel-body">
						<form role="form" enctype="multipart/form-data" action="../includes/post.php" method="POST">
							<fieldset>
								<div class="row">
									<div class="col-sm-12 col-md-10  col-md-offset-1 ">

										<div class="form-group">
                                        <strong> Descripción </strong>
											<div class="input-group">
												<input class="form-control" placeholder="Ingresa el nombre que se va a mostrar" name="text" id="text" type="text" >
											</div>
                                        </div>

                                        <div class="form-group">
                                        <strong> Imagen </strong>
											<div class="input-group">
												<input class="btn btn-primary"  name="imagen" id="imagen" type="file">
											</div>
										</div>
										
										<div class="form-group">
                                        <button class="btn btn-primary" 
                                            name="btnAccion" 
                                            value="Agregar" 
                                            type="submit">Agregar
                                        </button>
										</div>

									</div>
								</div>
							</fieldset>
						</form>
					</div>
					
                </div>
			</div>
		</div>
	</div>
</div>    