<?php 
/**
 * envia correo con los datos del formulario de trabaja con nosotros
 */

	require 'lib/PHPMailer/PHPMailerAutoload.php';

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombre = $_POST['nombre'];
    $nombre = $_POST['apellido'];
    $asunto = $_POST['asunto'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $comentario = $_POST['comentarios'];


    //$token = sha1(uniqid());

    //Create a new PHPMailer instance
    $mail = new PHPMailer;
    // Set PHPMailer to use the sendmail transport
    // $mail->isSendmail();
    //Set who the message is to be sent from
    $mail->setFrom($email, $nombre);
    //Set an alternative reply-to address
    //$mail->addReplyTo('vallenillac@gmail.com', 'Limchile');
    //Set who the message is to be sent to
    $mail->addAddress('limchile@limchile.cl', 'Limchile');
    $mail->addAddress('contacto@limchile.cl', 'Limchile');
    //set CC 
    $mail->AddCC($email, $nombre);
    //adding file from the form 
    if (isset($_FILES['userfile']) && $_FILES['userfile']['error'] == UPLOAD_ERR_OK) {
    	$mail->AddAttachment($_FILES['userfile']['tmp_name'], $_FILES['userfile']['name']);
		}

		// Set email format to HTML
    $mail->isHTML(true);

    $mail->Subject = $nombre.' - Contacto Limchile.cl';
    $mail->Body    = '
      <div>
        <img src="https://www.limchile.cl/images/logo.jpg" width="17%" height="auto" />
      </div>
      <div style="position:relative;width:100%;">
        <div style="width:70%;background:#fff;margin:3% auto;padding:1%;position:absolute;top:-40%;left:60%;transform:translateX(-50%);">
          <h2>Formulario Contacto - Limchile</h2>
          <p style="max-width:200px">
            Enviado por: '.$nombre.'<br>
            Asunto: '.$asunto.'<br>
            Tel&eacute;fono: '.$telefono.'<br><br>
            Comentarios Adicionales: '.$comentario.'<br>
          </p>

          <div style="width:100%;margin-top:40px;font-size:0.8em;color:#ccc;">
          </div>
        </div>
      </div>
    ';
    $mail->AltBody = '<h2>Formulario Contacto - Limchile</h2>';

    $r = null;

    if(!$mail->send()) {
      // $r = array('ok' => false);
      echo '<script type="text/javascript">alert("Hubo un Problema al Enviar el Correo, intenta de Nuevo"); setTimeout(function(){ window.location = "contacto.html"}, 100);</script>';
    } else {
      // $r = array('ok' => true);
      echo '<script type="text/javascript">alert("Correo Enviado Satisfactoriamente!"); setTimeout(function(){ window.location = "index.html"}, 100);</script>';
    };
  }

?>
