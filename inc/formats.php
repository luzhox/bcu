<?php
    function excerpt($num) {
        $limit = $num+1;
        $excerpt = explode(' ', get_the_excerpt(), $limit);
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt)."...";
        echo $excerpt;
    }

    function content($num) {
        $theContent = get_the_content();
        $output = preg_replace('/<img[^>]+./','', $theContent);
        $limit = $num+1;
        $content = explode(' ', $output, $limit);
        array_pop($content);
        $content = implode(" ",$content)."...";
        echo $content;
    }

    // INICIO DE HOOKS Y CPT

// Hooks admin-post
add_action( 'admin_post_nopriv_process_form', 'register_data_membership' );
add_action( 'admin_post_process_form', 'register_data_membership' );



    // Funcion callback
function register_data_membership() {

	//DATOS DE LA MADRE
    $primerNombre = sanitize_text_field($_POST['primer-nombre']);
    $segundoNombre = sanitize_text_field($_POST['segundo-nombre']);
    $apellidoPaterno = sanitize_text_field($_POST['apeliido-paterno']);
    $apellidoMaterno = sanitize_text_field($_POST['apellido-materno']);

    //DATOS DEL TARJETA HABIENTE
    $primerNombreTH = sanitize_text_field($_POST['primer-nombre-tarjeta']);
    $segundoNombreTH = sanitize_text_field($_POST['segundo-nombre-tarjeta']);
    $apellidoPaternoTH = sanitize_text_field($_POST['primer-apellido-tarjeta']);
    $apellidoMaternoTH = sanitize_text_field($_POST['segundo-apellido-tarjeta']);
    $numeroTarjeta = sanitize_text_field($_POST['numero-tarjeta']);
    $mesTarjeta = sanitize_text_field($_POST['mes-tarjeta']);
    $yearTarjeta = sanitize_text_field($_POST['year-tarjeta']);
    $documentoTH = sanitize_text_field($_POST['tipo-documento']);
    $numeroDocTH = sanitize_text_field($_POST['numero-documento']);
	$emailTH = sanitize_email($_POST['email-th']);
	$telTH = sanitize_text_field($_POST['telefono-th']);

	$adminmail = "hola@omar-galindo.com, cobranzas@bancodecordon.com.pe, ocelis@pssitcorp.com"; //email destino
	$subject = 'Formulario de Afiliación'; //asunto
	$headers = "Reply-to: " . $primerNombre . " <" . $emailTH . ">";

	//Registro de datos del formulario
	$registerData = "INFORMACIÓN DE LA MADRE" . "\n";
	$registerData .= "Nombre de la madre: " . "\n";
    $registerData .= $primerNombre . " " . $segundoNombre . " " . $apellidoPaterno . " " . $apellidoMaterno .  "\n\n";
	$registerData .= "INFORMACIÓN DEL TITULAR DE LA TARJETA" . "\n";
	$registerData .= "Nombre del Tarjeta habiente " . "\n";
    $registerData .= $primerNombreTH . " " . $segundoNombreTH . " " . $apellidoPaternoTH. " " . $apellidoMaternoTH . "\n\n";
    $registerData .= "Número de tarjeta" . "\n";
    $registerData .= $numeroTarjeta . "\n";
    $registerData .= "Fecha de vencimiento:" . "\n";
    $registerData .= $mesTarjeta . "/" . $yearTarjeta . "\n\n";
    $registerData .= "Tipo de documento:" . "\n";
    $registerData .= $documentoTH . "\n\n";
    $registerData .= "Número de documento:" . "\n";
    $registerData .= $numeroDocTH . "\n\n";
    $registerData .= "Telefono del tarjeta habiente:" . "\n";
    $registerData .= $telTH . "\n\n";
    $registerData .= "E-mail del tarjeta habiente:" . "\n";
	$registerData .= $emailTH . "\n\n";

	//Notificación por corrdeo de Afiliación nueva
	$notificacionAfiliacion = "Nuevo afiliación de " . $primerNombre . " " . $apellidoPaterno;



	$sendmail = wp_mail( $adminmail, $subject, $notificacionAfiliacion, $headers);

	if ( $sendmail ){
		wp_insert_post([
			'post_title'	=>'Afiliación de '. $primerNombre . "  " . $apellidoPaterno,
			'post_type'		=>'afiliados_post_type',
			'post_content'	=> $registerData,
			'post_status' 	=> 'private',
			]);
	}

	wp_redirect( home_url("/gracias-por-afiliarte/")."?sent=".$sendmail ); //asumiendo que existe esta url
}
?>