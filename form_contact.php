<?php  

/* Enviar E-mail con Respuesta Automática 

*/ 

// Recibiendo los datos pasados por la pagina "form_contato.php" 

$recibenombre = $_POST["nombre"]; 

$recibemail = $_POST["email"]; 

$recibemsg  = $_POST["mensaje"]; 

$recibetel  = $_POST["telefono"];

$recibeciudad  = $_POST["ciudad"];




// Definiendo las cabeceras del e-mail 

$headers = "Content-type:text/html; charset=iso-8859-1"; 

// Vamos a definir ahora el destinatario de e-mail, ya sea el de usted o el de su cliente. 


$para = "yaconstruye@gmail.com"; 

// Definiendo el aspecto del mensaje 

$mensaje   = "<h1>llego un mensaje de la pagina paginaswebly del formulario contactenos :</h1> "; 

$mensaje   = "<h3>correo del que lleno el formulario contacto de la pagina paginaswebly  :</h3> "; 

$mensaje  .= $recibemail;

$mensaje  .= "<h3>Asunto:</h3>"; 

$mensaje  .= "Mensaje de la pagina web paginaswebly"; 

$mensaje  .= "<h3>nombre del que lleno el formulario contacto de la pagina web paginaswebly:</h3>"; 

$mensaje  .= "<p>"; 

$mensaje  .= $recibenombre; 

$mensaje  .= "<h3>telefono del formulario contacto de la pagina web paginaswebly</h3>"; 

$mensaje  .= $recibetel; 

$mensaje  .= "<p>";

$mensaje  .= "<h3>Mensaje del formulario contacto de la pagina web paginaswebly</h3>"; 

$mensaje  .= "<p>"; 

$mensaje  .= $recibemsg; 

$mensaje  .= "<p>";

$mensaje  .= "<h3>ciudad del formulario contacto de la pagina web paginaswebly</h3>"; 

$mensaje  .= "<p>"; 

$mensaje  .= $recibeciudad

$mensaje  .= "</p>"; 



// Enviando el mensaje para el destinatario 

$envia =  mail($para,"Formulario contacto",$mensaje,$headers); 

// Envia un e-mail para el remitente, agradeciendo la visita en el sitio, y diciendo que en breve el e-mail sera respondido. 

$mensaje2  = "<p>Hola <strong>" . $recibenombre . "</strong>. Agradecemos su visita y la oportunidad de recibir su contacto. Antes de 24 horas responderemos su inquietud..</p>"; 

$mensaje2 .= "<p>Observacion - No es necesario responder este mensaje.</p>"; 

$envia =  mail($recibemail,"Su mensaje fue recibido!",$mensaje2,$headers); 

// Muestra en la pantalla el mensaje de éxito, y después redirecciona de vuelta para la pagina del contacto.

?>

      <script>
     
    
     alert("Mensaje enviado con exito!"); 
window.location.href="index.html";
     </script> 
     
     
<?


?> 