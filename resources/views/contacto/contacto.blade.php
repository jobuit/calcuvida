@include('welcome/head')
@include('welcome/nav')



<section id="contact-form-section" class="form-content-wrap mt-5">
		<div class="container">
			<div class="row">


				<div class="tab-content">
					<div class="col-sm-12">
						<div class="item-wrap">
							<div class="row">
                                
                                <div class="col-md-4 border" style="background:#3498DB;color:#fff;">
                                    <div class="row d-flex align-items-center" style="position:relative;top:100px;">
                                            <div class="col-md-12 d-flex justify-content-center d-flex align-items-center">
                                                <h3>Informacion de contacto</h3>
                                            </div>
                                            <div class="col-md-12 d-flex justify-content-center">
                                                <h5>Calcuvida@gmail.com</h5>
                                            </div>
                                    </div>
                                    
                                </div>
                                <div class="col-md-8 border">
                                        <div class="col-md-12">
                                                <div class="item-content colBottomMargin">
                                                    <div class="item-info">
                                                        <h2 class="item-title text-center">Formulario de contacto</h2>
                                                        
                                                    </div><!--End item-info -->
                                                    
                                               </div><!--End item-content -->
                                            </div><!--End col -->
                                            <div class="col-md-12">
								
								
                                                    <form id="contactForm" name="contactform" data-toggle="validator" class="popup-form">
                                                    <div class="row">
                                                        <div id="msgContactSubmit" class="hidden"></div>
                                                        
                                                        <div class="form-group col-sm-6">
                                                                <div class="input-group mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                                                    </div>
                                                                    <input type="text" class="form-control" placeholder="Tu nombre*" aria-label="Username" aria-describedby="basic-addon1">
                                                                </div>
                                                        </div><!-- end form-group -->
                                                        <div class="form-group col-sm-6">
                                                                <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="E-mail*" aria-label="Username" aria-describedby="basic-addon1">
                                                                    </div>
                                                        </div><!-- end form-group -->
                                                        <div class="form-group col-sm-6">
                                                                <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-phone"></i></span>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="Telefono*" aria-label="Username" aria-describedby="basic-addon1">
                                                                    </div> 
                                                        </div><!-- end form-group -->
                                                        <div class="form-group col-sm-6">
                                                                <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-book"></i></span>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="Asunto*" aria-label="Username" aria-describedby="basic-addon1">
                                                                    </div>  
                                                        </div><!-- end form-group -->
                                                        <div class="form-group col-sm-12">
                                                            <div class="help-block with-errors"></div>
                                                            <textarea rows="3" name="message" id="message" placeholder="Escribe tu comentario aquí*" class="form-control" required data-error="Por favor ingresa un mensaje"></textarea>
                                                
                                                        </div><!-- end form-group -->
                                                        
                                                        <div class="form-group last col-sm-12">
                                                            <button type="submit" id="submit" class="btn btn-light"><i class='fa fa-envelope'></i> Enviar</button>
                                                        </div><!-- end form-group -->	
                                                
                                                        <span class="sub-text"><small>* Campos requeridos</small></span>
                                                        <div class="clearfix"></div>
                                                    </div><!-- end row -->
                                                </form><!-- end form -->
                                                
                                                
                                        
                                        
                                        
                                    
                                    </div>   
                                </div>
								
								
                                


							</div><!--End row -->
							
						
								
							
							<!-- Popup end -->
							
						</div><!-- end item-wrap -->
					</div><!--End col -->
                </div><!--End tab-content -->
                



			</div><!--End row -->
		</div><!--End container -->
	</section>
	
	
	
	
	
	
	
	
	

	
	



























@include('welcome/footer')