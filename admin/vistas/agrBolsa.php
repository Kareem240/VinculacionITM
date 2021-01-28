<div class="container" style="margin-top:40px" >
		<div class="row">
			<div class="col-16" >
				<div class="panel panel-default"  >
					<div class="panel-heading">
						<h1>Agregar Bolsa de Trabajo</h1>
					</div>
					<div class="panel-body">
						<form role="form" action="../includes/post.php" enctype="multipart/form-data" method="POST">
					        <table width="100%" class="table table-light table-bordered-black">
								<tr>
									<th width="20%" class="text-center">Titulo</th>
									<th width="20%" class="text-center">Descripcion</th>
									<th width="40%" class="text-center">Texto</th>
									<th width="15%" class="text-center">Opcion</th>
								</tr>
								
									<tr>
										<td class="text-center"><input class="form-control" type="text" name="titulo" id="titulo"></td>
										<td class="text-center"><textarea type="text" class="form-control" rows = "5" cols = "10" name = "descripcion"></textarea></td>
										<td class="text-center"><textarea type="text" class="form-control" rows = "10" cols = "100" name = "texto"></textarea></td>
                                        
                                       
									<td class="text-center">
                                        
                                        
                                         <div class="form-group">
                                         
                                        <strong> Imagen </strong>
											<div class="input-group">
												<input class="btn btn-primary"  name="imagen" id="imagen" type="file">
											</div>
                                           
										</div>
                                        

										<button class="btn btn-primary" 
					                        name="btnAccion" 
					                        value="agrBolsa" 
					                        type="submit">Agregar
					                    </button>
						        	</td>
						        	</td>
									</tr>
								
							</table>
						</form>
					</div>
					
                </div>
			</div>
		</div>
	</div>
</div>    