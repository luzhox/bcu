

<div class="form-bcu <?php the_sub_field('class')?>">
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="container">
        <div class="form-bcu__content">
				<div data-aos="fade-up"><?php the_sub_field('form')?></div>
				<iframe name="hidden_iframe" id="hidden_iframe" style="display: none" ></iframe>
				<form id="formContact" action="https://docs.google.com/forms/u/0/d/e/1FAIpQLScjzPg7O6X53mNhuADWWaWA1shCp0J7LkArPQkf5KSxTTecAw/formResponse" data-thanks="https://www.bancodecordon.com.pe/gracias/" method="post" target="hidden_iframe" onsubmit="submitted=true;">
					<div class="group-form-2">
						<div class='input-field'>
							<label>Nombres</label>
							<input name='entry.185367120' maxlength='80' type='text' required/>
						</div>
										<div class='input-field'>
											<label>Apellidos</label>
											<input name='entry.50808008' maxlength='80' type='text' required/>
										</div>
					</div>
					<div class="group-form-2">
						<div class='input-field'>
								<label>Celular</label>
								<input name='entry.913550383' maxlength='80' type='number' required/>
							</div>
										<div class='input-field'>
											<label>Correo</label>
											<input name='entry.1092631801' maxlength='80' type='email' required/>
										</div>
					</div>
					<div class="checkbox-button"  style="margin-top:32px;">
						<div class='input-checkbox'>
						<div class='wf-field'>
							<div class='wpcf7-list-item' style="position:relative;">
									<label for="">
										<input class='wf-field-item wf-field-checkbox' type='checkbox' id='TermsButton' name='entry.776960057' autocomplete='off' onclick='disablePrivacyError5921505000000467088()' value="Acepto, términos" required/>
										<span for='privacycheck5921505000000467088' class='cP'><span style="margin: 0px; padding: 0px; box-sizing: border-box; border: 0px; font-family: Poppins, Arial, Helvetica, sans-serif; outline: 0px; color: rgb(42, 41, 56); font-size: 14px; letter-spacing: -0.2px;">Acepto que el BCU se contacte conmigo.</span><a href="https://www.bancodecordon.com.pe/terminos-y-condiciones/" target="_blank" style="margin: 0px; padding: 0px; box-sizing: border-box; border: 0px; font-family: Poppins, Arial, Helvetica, sans-serif; font-weight: 700; outline: 0px; color: rgb(0, 175, 170); font-size: 14px; letter-spacing: -0.2px;">Políticas de protección de datos</a></sp>
									</label>

								</div>
						</div>
					</div>
					<div id="html_element"></div>

					<div class='wf-row wf-btn-row '>
						<div class='wf-label' data-ux-empty-label='true'></div>
						<div class='wform-btn-wrap btn-submit'>
						<button type="button" class="g-recaptcha btn-form" id="btnFormContact" disabled>Enviar mensaje</button>
					</div>
		</div>
	</div>

	</form>
	</div>
</div>
</div>
        </div>
    </div>
</div>

<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
    </script>

<script>
	const btnFormContact = document.getElementById('btnFormContact');
				btnFormContact.addEventListener('click', onClick, false);
	document.addEventListener('DOMContentLoaded', function() {
		// $('#TermsButton').click(function() {
		// 	if ($(this).is(':checked')) {
		// 		$('#btnFormContact').removeAttr('disabled');
		// 	} else {
		// 		$('#btnFormContact').attr('disabled', 'disabled');
		// 	}
		// });
	});
	function onloadCallback() {
		grecaptcha.render('html_element', {
			'sitekey' : '6LcNWzEpAAAAALKYGp-byGaxRyP_azVv7dmmg6Oc',
			'callback' : function(response) {
				console.log(response)
				$('#btnFormContact').removeAttr('disabled');
			}
		});
	}
	function onClick(e) {
        e.preventDefault();
				

	
					document.getElementById('formContact').submit()
					setTimeout(() => {
						const urlthanks= document.getElementById('formContact').getAttribute('data-thanks');
								window.location.href=urlthanks;
					}, 600);
	}
						
					
</script>