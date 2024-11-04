
<div class="form-bcu <?php the_sub_field('class')?>">
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="container">
        <div class="form-bcu__content">
				<div class="form">
          <div data-aos="fade-up"><?php the_sub_field('form')?></div>
					
						

					</div>
					
        </div>
    </div>
</div>


<script>

	document.addEventListener('DOMContentLoaded', function() {
				const hasChecked = document.getElementById('hasChecked');
				hasChecked.addEventListener('change', function(e) {
					const btnFormContact = document.getElementById('btnFormContact');

					const btnFormGhost = document.querySelector('.btn-form-text');

					if (e.target.checked) {
						console.log('checked')
						btnFormContact.classList.remove('inactive');
						btnFormGhost.classList.add('hide');
					} else {
						console.log('no checked')

						btnFormGhost.classList.remove('hide');
						btnFormContact.classList.add('inactive');

					}
				});
			});


		
		







  function submitForm(e){
    console.log('llego')
    const urlthanks= document.getElementById('formContact').getAttribute('data-thanks');
    window.location.href=urlthanks;
  }




  </script>