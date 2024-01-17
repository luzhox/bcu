<div class="suscribe" style="background:<?php the_sub_field('bg')?>">
  <div class="container">
    <div class="suscribe__content" data-aos="fade-up">
      <div class="suscribe__content__img">
        <?php $image = get_sub_field('img');
              if( !empty( $image ) ): ?>
                  <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
      </div>
      <div class="suscribe__content__form">
        <?php the_sub_field('form')?>
        <div class='wf-parent' >
	<div class='wf-wrapper' id='BiginWebToRecordFormDiv5921505000000462375'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<META HTTP-EQUIV='content-type' CONTENT='text/html;charset=UTF-8'>
	<form id='BiginWebToRecordForm5921505000000462375' name='BiginWebToRecordForm5921505000000462375' class='wf-form-component' data-ux-form-alignment='top' style='font-family: Arial;position: relative;font-size:15px;' method='POST' enctype='multipart/form-data' onSubmit='javascript:document.charset="UTF-8"; return validateForm5921505000000462375()' accept-charset='UTF-8'>
<!-- Do not remove this code. -->
 	<input type='text' style='display:none;' name='xnQsjsdp' value='4b9a40f7f2437c19d6ec4bfe8445dbfdb62631fd0dea62e90952acea1144e8a5'/>
 	<input type='hidden' name='zc_gad' id='zc_gad' value=''/>
 	<input type='text' style='display:none;' name='xmIwtLD' value='cccb537eeb003fd6d715f8e39951b4e7fcf1a2540b8c1a3f2cf1f7035dc55530'/>
 	<input type='text' style='display:none;' name='actionType' value='Q29udGFjdHM='/>
 	<input type='text' style='display:none;' name='returnURL' value='https&#x3a;&#x2f;&#x2f;www.bancodecordon.com.pe/gracias' />
 	<div id='elementDiv5921505000000462375' class='wf-form-wrapper'>
 	 	<div class='input-field'>
 	 	 	<div class='wf-field wf-field-mandatory'>
 	 	 	 	<div class='wf-field-inner'>
          <label>Nombres y Apellidos</label>
          <input name='Last Name' maxlength='80' type='text' value='' class='wf-field-item wf-field-input' oninput='removeError(this)'/>
 	 	 	 	</div>
 	 	 	 	<div class='wf-field-help-text'>
 	 	 	 	</div>
 	 	 	</div>
 	 	</div>
 	 	<div class='input-field'>
 	 	 	<div class='wf-field wf-field-mandatory'>
 	 	 	 	<div class='wf-field-inner'>
          <label class='wf-label'>Correo</label>
          <input fvalidate='true' ftype='email' name='Email' maxlength='100' type='text' value='' class='wf-field-item wf-field-input' oninput='removeError(this)'/>
 	 	 	 	</div>
 	 	 	</div>
 	 	</div>
    <div class="checkbox-button">
    	<div class='input-checkbox'>
					 <div class='wpcf7-list-item' style="position:relative">
							<label>
								 <input class='wf-field-item wf-field-checkbox' type='checkbox' id='privacycheck5921505000000462375' name='privacyTool' autocomplete='off' onclick='disablePrivacyError5921505000000462375()'/>
								 <span for='privacycheck5921505000000462375' class='cP'><span style="color: rgb(42, 41, 56); font-family: Poppins, Arial, Helvetica, sans-serif; font-size: 14px; letter-spacing: -0.2px;">Acepto que el BCU se contacte conmigo.&nbsp;</span><a href="https://www.bancodecordon.com.pe/terminos-y-condiciones/" target="_blank" style="margin: 0px; padding: 0px; box-sizing: border-box; border: 0px; font-family: Poppins, Arial, Helvetica, sans-serif; font-weight: 700; outline: 0px; color: rgb(0, 175, 170); font-size: 14px; letter-spacing: -0.2px;">Políticas de protección de datos</a></span>
							</label>
					 </div>
				</div>
      <div class='wf-row wf-btn-row btn-submit' style="margin-top:24px;">
        <div class='wf-label' data-ux-empty-label='true'></div>
        <div class='wform-btn-wrap'>
        <input id='formsubmit' type='submit' class='wf-btn wpcf7-submit btn-form'  value='Enviar Mensaje'/>
      </div>
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


<script>
 	  var mndFileds=new Array('Last\x20Name','Email');
 	  var fldLangVal=new Array('Nombres y Apellidos','Email');
 	 var wfInnerWidth = window.innerWidth;
 	 if(wfInnerWidth <= 768){
 	 	 document.forms['BiginWebToRecordForm5921505000000462375'].setAttribute('data-ux-form-alignment', 'top');
 	 }
		var name='';
		var email='';
 	function removeError(fieldObj) {
 	 	var parentElement = fieldObj.parentElement.parentElement,
 	 	 	childEle = parentElement.getElementsByClassName('wf-field-error')[0];
 	 	if(childEle) {
 	 	 	parentElement.classList.remove('wf-field-error-active');
 	 	 	parentElement.removeChild(parentElement.getElementsByClassName('wf-field-error')[0]);
 	 	}
 	}
 	function setError(fieldObj, label) {
 	 	var parentElement = fieldObj.parentElement.parentElement,
 	 		childEle = parentElement.getElementsByClassName('wf-field-error')[0];
 	 	if(!childEle) {
 	 	 	var spanEle = document.createElement('SPAN');
 	 	 	spanEle.setAttribute('class', 'wf-field-error');
 	 	 	spanEle.innerHTML = label;
 	 	 	parentElement.append(spanEle);
 	 	 	parentElement.classList.add('wf-field-error-active');
 	 	}
 	}
 	function validateFields5921505000000462375() {
 	 	var isReturn = true;
 	 	var form = document.forms['BiginWebToRecordForm5921505000000462375'];
 	 	var validateFld = form.querySelectorAll('[fvalidate=true]');
 	 	var i;
 	 	for (i = 0; i < validateFld.length; i++)
 	 	{
 	 	 	var validateFldVal = validateFld[i].value;
 	 	 	if(validateFldVal !== '') {
 	 	 	 	var fLabel = validateFld[i].parentElement.parentElement.parentElement.getElementsByClassName('wf-label')[0].innerHTML;
 	 	 	 	switch(validateFld[i].getAttribute('ftype')) {
 	 	 	 	case 'email':
 	 	 	 	 	if(validateFldVal.match(/^([A-Za-z0-9-._%'+/]+@[A-Za-z0-9.-]+.[a-zA-Z]{2,22})$/) === null) {
 	 	 	 	 	 	setError(validateFld[i], 'Enter valid ' + fLabel);
 	 	 	 	 	 	isReturn = false;
 	 	 	 	 	}
 	 	 	 	 	break;
 	 	 	 	case 'number':
 	 	 	 	 	if(validateFldVal.match(/^[0-9]+$/) === null) {
 	 	 	 	 	 	setError(validateFld[i], 'Enter valid ' + fLabel);
 	 	 	 	 	 	isReturn = false;
 	 	 	 	 	 }
 	 	 	 	 	break;
 	 	 	 	case 'double':
 	 	 	 	 	if(validateFldVal.match(/^[0-9]*(\.[0-9]{0,2})?$/) === null) {
 	 	 	 	 	 	setError(validateFld[i], 'Enter valid ' + fLabel);
 	 	 	 	 	 	isReturn = false;
 	 	 	 	 	 }
 	 	 	 	 	break;
 	 	 	 	case 'mobile':
 	 	 	 	 	 if(validateFldVal.match(/^[0-9a-zA-Z+.()\-;\s]+$/) === null) {
 	 	 	 	 	 	setError(validateFld[i], 'Enter valid ' + fLabel);
 	 	 	 	 	 	isReturn = false;
 	 	 	 	 	 }
 	 	 	 	 	break;
 	 	 	 	 }
 	 	 	}
 	 	}
 	 	return isReturn;
 	}

		function checkMandatory5921505000000462375() {
		var isReturn = true;
		for(i=0;i<mndFileds.length;i++) {
		  var fieldObj=document.forms['BiginWebToRecordForm5921505000000462375'][mndFileds[i]];
		  if(fieldObj) {
			if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length==0) {
				if(fieldObj.type =='file')
				{
					 setError(fieldObj, 'Please select a file to upload.');
					isReturn = false;
				}
				setError(fieldObj, fldLangVal[i] + ' cannot be empty');
				isReturn= false;
			}  else if(fieldObj.nodeName=='SELECT') {
				if(fieldObj.options[fieldObj.selectedIndex].value=='-None-') {
				setError(fieldObj, fldLangVal[i] +' cannot be none.');
				isReturn = false;
			   }
			} else if(fieldObj.type =='checkbox'){
 	 	 	 if(fieldObj.checked == false){
				setError(fieldObj, 'Please accept  '+fldLangVal[i]);
				isReturn= false;
				}
			 }
			 try {
			     if(fieldObj.name == 'Last Name') {
				name = fieldObj.value;
 	 	 	    }
			} catch (e) {}
		    }
		}
		if(!validateFields5921505000000462375()){isReturn = false;}
		if(!isReturn){
			var errEle = document.getElementsByClassName('wf-field-error');
			if(errEle && errEle.length >0){
				var inputEle = errEle[0].parentElement.getElementsByTagName('input');
				if(inputEle && inputEle.length == 0) {
					inputEle = errEle[0].parentElement.getElementsByTagName('select');
				}
				if(inputEle && inputEle.length > 0) {
					inputEle[0].focus();
				}
			}
		}
		return isReturn;
		}


</script>
 	 <script id='wf_script' src='https://bigin.zoho.com/crm/WebformScriptServlet?rid=cccb537eeb003fd6d715f8e39951b4e7fcf1a2540b8c1a3f2cf1f7035dc55530gid4b9a40f7f2437c19d6ec4bfe8445dbfdb62631fd0dea62e90952acea1144e8a5'></script>