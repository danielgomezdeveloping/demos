<?php  

/* Enviar E-mail con Respuesta Automática 

*/ 

// Recibiendo los datos pasados por la pagina "form_contato.php" 



$recibemail = $_POST["email"]; 



// Definiendo las cabeceras del e-mail 

$headers = "Content-type:text/html; charset=iso-8859-1"; 

// Vamos a definir ahora el destinatario de e-mail, ya sea el de usted o el de su cliente. 


$para = "yaconstruye@gmail.com"; 

// Definiendo el aspecto del mensaje 

$mensaje   = "<h1> !**** llego la suscripcion de la  pagina yaconstruye ****!:</h1> "; 
 
$mensaje  .= $recibemail;

$mensaje  .= "</p>"; 



// Enviando el mensaje para el destinatario 

$envia =  mail($para,"E-mail de suscripcion",$mensaje,$headers); 

// Envia un e-mail para el remitente, agradeciendo la visita en el sitio, y diciendo que en breve el e-mail sera respondido. 

$mensaje  = "<p>Hola <strong>" . $recibemail . "</strong>. Agradecemos su suscripcion es totalmente gratis. le estaremos enviando todas las noticias, consejos que tengamos o actualizaciones en nuestra seccion de blog poniendolo al tanto de todos los consejos de construccion y de nuestra pagina yaconstruye..</p>"; 

$mensaje .= "<p>Observacion - No es necesario responder este mensaje.</p>"; 

$envia =  mail($recibemail,"Suscripcion recibida con exito!",$mensaje,$headers); 

// Muestra en la pantalla el mensaje de éxito, y después redirecciona de vuelta para la pagina del contacto.

?>

      <script>
     
    
     alert("Se suscribio correctamente!"); 
window.location.href="index.html";
     </script> 
     
     
<?

?> 