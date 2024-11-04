
<div id="Content" class="afiliacion">
  <div class="container">
	<div class="content_wrapper clearfix">

		<div class="sections_group">

			<div class="entry-content" itemprop="mainContentOfPage">
				<div class="section mcb-section">
					<div class="section_wrapper mcb-section-inner">

						<div class="wrap mcb-wrap one valign-middle clearfix">
							<div class="mcb-wrap-inner">
								<div class="column mcb-column mcb-item-ipctnic8b one-fifth column_placeholder"></div>
								<div class="column mcb-column mcb-item-ipctnic8b three-fifth column_placeholder">
									<?php
										if ( isset($_GET['sent']) ){
											if ( $_GET['sent'] == '1'){
												echo "<p> ✔ Muchas gracias por afiliarte.</p><br>";
											}
											else {
												echo "<p> Hubo un error al ingresar tus datos. Intentanlo de nuevo.</p><br>";
											}
										}
									?>
								</div>
								<div class="column mcb-column mcb-item-ipctnic8b one-fifth column_placeholder"></div>
							</div>
						</div>


					</div>
				</div>

				<div class="section mcb-section">
					<div class="section_wrapper mcb-section-inner">

						<div class="wrap mcb-wrap one valign-middle clearfix">
							<div class="mcb-wrap-inner">
								<div class="column mcb-column mcb-item-ipctnic8b one-fifth column_placeholder"></div>
								<div class="column mcb-column mcb-item-866koo2il one-fifth column_image logo-niubiz">
									<div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
										<div class="image_wrapper" style="display:flex; margin-bottom:32px;">
											<img class="scale-with-grid" src="<?php echo get_stylesheet_directory_uri(); ?>/images/cropped-logo-niubiz.png" alt="cropped-logo-niubiz" title="cropped-logo-niubiz" width="154" height="auto">
                      <img class="scale-with-grid" src="<?php echo get_theme_mod('brand_img'); ?>" alt="" title="" width="250" style="margin-left:24px;">

                    </div>
									</div>
								</div>

							</div>
						</div>


					</div>
				</div>

				<div class="section mcb-section">
					<div class="section_wrapper mcb-section-inner">

						<div class="wrap mcb-wrap one valign-middle clearfix">
							<div class="mcb-wrap-inner">
								<div class="column mcb-column mcb-item-tplyy7zhw one-fifth column_placeholder"></div>
								<div class="column mcb-column mcb-item-nebj7qo5j three-fifth column_column">
                  <div class="afiliacion__title">
									<h2 style="color:#24A2DE;">Afiliación Criopreservación Anual (Mantenimiento)</h2>
									<p>A través del envío de este formulario autorizo el cargo que corresponda al mantenimiento de las muestras ciropreservadas para cada uno de mis hijos, según los contratos firmados con NECBB.</p>

                  </div>

									<form id="formAfiliacion" method="post" action="<?php echo admin_url( 'admin-post.php' ) ?>" >

										<div class="column one">
											<h4 style="color:#24A2DE;">INFORMACIÓN DE LA MADRE O PADRE</h4>
										</div>
                    <div class="group-form-2">
                      <div class="input-field">
                        <label for="primer-nombre">Primer nombre</label>
                        <input type="text" name="primer-nombre" id="primer-nombre" required>
                      </div>

                      <div class="input-field">
                        <label for="segundo-nombre">Segundo nombre</label>
                        <input type="text" name="segundo-nombre" id="segundo-nombre" >
                      </div>
                    </div>
                    <div class="group-form-2">
										<div class="input-field">
											<label for="apeliido-paterno">Apellido paterno</label>
											<input type="text" name="apeliido-paterno" id="apeliido-paterno" required>
										</div>

										<div class="input-field">
											<label for="apellido-materno">Apellido materno</label>
											<input type="text" name="apellido-materno" id="apellido-materno" required>
										</div>
                    </div>



										<div class="column one">
											<h4 style="color:#24A2DE; margin-top:32px">INFORMACIÓN DEL TITULAR DE LA TARJETA</h4>
										</div>
                      <div class="group-form-2">
                        <div class="input-field">
                          <label for="primer-nombre-tarjeta">Primer nombre</label>
                          <input type="text" name="primer-nombre-tarjeta" id="primer-nombre-tarjeta" required>
                        </div>

                        <div class="input-field">
                          <label for="segundo-nombre-tarjeta">Segundo nombre</label>
                          <input type="text" name="segundo-nombre-tarjeta" id="segundo-nombre-tarjeta" >
                        </div>
                    </div>
                    <div class="group-form-2">
										<div class="input-field">
											<label for="primer-apellido-tarjeta">Apellido paterno</label>
											<input type="text" name="primer-apellido-tarjeta" id="primer-apellido-tarjeta" required>
										</div>

										<div class="input-field">
											<label for="segundo-apellido-tarjeta">Apellido materno</label>
											<input type="text" name="segundo-apellido-tarjeta" id="segundo-apellido-tarjeta" required>
										</div>
                    </div>
                      <div class="group-form-3">
										<div class="input-field">
											<label for="numero-tarjeta">Número de tarjeta</label>
											<input type="text" name="numero-tarjeta" id="numero-tarjeta" maxlength="16" required>
										</div>

										<div class="input-field select active">
												<label for="mes-tarjeta">Mes de vencimiento</label>
												<select name="mes-tarjeta" aria-required="true" aria-invalid="false">
													<option value="">---</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
													<option value="11">11</option>
													<option value="12">12</option>
												</select>
                        </div>
											<div class="input-field select active">
												<label for="year-tarjeta">Año de vencimiento</label>
												<select name="year-tarjeta" aria-required="true" aria-invalid="false">
													<option value="">---</option>
													<option value="2022">2022</option>
													<option value="2023">2023</option>
													<option value="2024">2024</option>
													<option value="2025">2025</option>
													<option value="2026">2026</option>
													<option value="2027">2027</option>
													<option value="2028">2028</option>
													<option value="2029">2029</option>
													<option value="2030">2030</option>
													<option value="2031">2031</option>
													<option value="2032">2032</option>
												</select>
											</div>
										</div>
                    <div class="group-form-2">
										<div class="input-field select active">
											<label for="tipo-documento">Tipo de Doc. Identidad del TH*</label>
											<select name="tipo-documento" aria-required="true" aria-invalid="false">
												<option value="">---</option>
												<option value="DNI">DNI</option>
												<option value="Carne de Extranjería">Carne de Extranjería</option>
												<option value="Pasaporte">Pasaporte</option>
											</select>
                    </div>
										<div class="input-field">
											<label for="numero-documento">Número de Identidad del TH*</label>
											<input type="text" name="numero-documento" id="numero-documento" required>
										</div>


                    </div>
                    <div class="group-form-2">
                    <div class="input-field">
											<label for="telefono-th">Teléfono</label>
											<input type="text" name="telefono-th" id="telefono-th" required>
										</div>
										<div class="input-field">
											<label for="email-th">E-mail</label>
											<input type="email" name="email-th" id="email-th" required>
										</div>
                    </div>
										<div class="column one" style="margin-top:32px;">
											<p style="font-size:14px; color:gray;">*Tarjeta habiente</p>
										</div>
                    <div class="checkbox-button">
										<div class="input-checkbox">
                    <div class="wpcf7-list-item" style="position:relative">

                    <label for="">
											<input type="checkbox" id="terms" class='wf-field-item wf-field-checkbox' name="terms-afiliacion" required>
                      <span for='privacycheck5921505000000467002' class='cP'><span style='color: rgb(42, 41, 56); font-family: Poppins, Arial, Helvetica, sans-serif; font-size: 14px; letter-spacing: -0.2px;'>Acepto los</span><a href='https://bancodecordon.com.pe/condiciones-niubiz/condiciones-del-servicio-niubiz.pdf' target='_blank' style='margin: 0px; padding: 0px; box-sizing: border-box; border: 0px; font-family: Poppins, Arial, Helvetica, sans-serif; font-weight: 700; outline: 0px; color: rgb(0, 175, 170); font-size: 14px; letter-spacing: -0.2px;'>Términos y condiciones</a></span>
                      </label>
										</div>
                    </div>
                    </div>
										<div class="afiliacion__detail">
											<p  style="font-size:14px; color:gray;">
												Una vez se registre el débito automático recibirá un correo de confirmación de <b>Niubiz</b>
												<br>
												Consultas: <a href="mailto:cobranzas@bancodecordon.com.pe">cobranzas@bancodecordon.com.pe</a><br>
												Celular: <a href="tel:+51981300025">981 300 025</a>
											</p>
										</div>
										<br>
										<input type="hidden" name="action" value="process_form">
										<input class="btn__primary" type="submit" name="submit" value="Enviar" style="min-width:200px;">
									</form>


								</div>
								<div class="column mcb-column mcb-item-tplyy7zhw one-fifth column_placeholder"></div>
							</div>
						</div>


					</div>
				</div>




			</div>



		</div>

		<!--<?php //get_sidebar(); ?>-->

	</div>
  </div>
</div>