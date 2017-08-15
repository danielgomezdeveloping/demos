<?php  

/* Enviar E-mail con Respuesta Automática 

*/ 

// Recibiendo los datos pasados por la pagina "form_contato.php" 

$recibenombre = $_POST["nombre"]; 

$recibemail = $_POST["email"]; 

$recibeubi  = $_POST["ubicacion"]; 

$recibetel  = $_POST["telefono"];

$recibedire  = $_POST["direccion"];

$recibeopc  = $_POST["opciones"];

$recibeobra  = $_POST["inicioobra"];

$recibevivienda  = $_POST["vivienda"];

$recibemsg  = $_POST["mensaje"];

// Definiendo las cabeceras del e-mail 

$headers = "Content-type:text/html; charset=iso-8859-1"; 

// Vamos a definir ahora el destinatario de e-mail, ya sea el de usted o el de su cliente. 


$para = "yaconstruye@gmail.com"; 

// Definiendo el aspecto del mensaje 

$mensaje   = "<h2>!*** correo del que solicito la cotizacion  ***!:</h2> "; 

$mensaje  .= $recibemail;

$mensaje  .= "<h2>!*** Asunto: ***!</h2>"; 

$mensaje  .= "*** cotizacion de la pagina web yaconstruye ***"; 

$mensaje  .= "<h2>!*** nombre del que solicito la cotizacion: ***!</h2>"; 

$mensaje  .= "<p>"; 

$mensaje  .= $recibenombre; 

$mensaje  .= "<h2> !*** telefono del que solicito la cotizacion ***!</h2>"; 

$mensaje  .= $recibetel; 

$mensaje  .= "<p>";

$mensaje  .= "<h2> !*** donde esta ubicado el que solicito la cotizacion ***!</h2>"; 

$mensaje  .= "<p>"; 

$mensaje  .= $recibeubi; 

$mensaje  .= "<p>";

$mensaje  .= "<h2>!*** direccion del cotizante donde reside actualmente ***!</h2>"; 

$mensaje  .= $recibedire; 

$mensaje  .= "<p>";

$mensaje  .= "<h2>!*** el cotizante requiere que el trabajador tome la cotizacion personalmente ***!</h2>"; 

$mensaje  .= $recibeopc; 

$mensaje  .= "<p>";

$mensaje  .= "<h2>!*** cuando requiere el cliente iniciar la obra ***!</h2>"; 

$mensaje  .= $recibeobra; 

$mensaje  .= "<p>";

$mensaje  .= "<h2>!*** que tipo de vivienta tiene el cliente***!</h2>"; 

$mensaje  .= $recibevivienda; 

$mensaje  .= "<p>";

$mensaje  .= "<h2>!*** otros detalles de la cotizacion ***!</h2>"; 

$mensaje  .= $recibemsg; 

$mensaje  .= "</p>"; 

// Enviando el mensaje para el destinatario 

$envia =  mail($para,"Solicitud de cotizacion",$mensaje,$headers); 

// Envia un e-mail para el remitente, agradeciendo la visita en el sitio, y diciendo que en breve el e-mail sera respondido. 

$mensaje2  = "<p>Hola <strong>" . $recibenombre . "</strong>. Agradecemos su visita y gracias por tomar el tiempo de llenar el formulario de cotizacion. Antes de 24 horas le enviaremos las instrucciones para consultar su cotizacion ..</p>"; 

$mensaje2 .= "<p>Observacion - No es necesario responder este mensaje.</p>"; 

$envia =  mail($recibemail,"Su solicitud de cotizacion fue recibida!",$mensaje2,$headers); 

// Muestra en la pantalla el mensaje de éxito, y después redirecciona de vuelta para la pagina del contacto.

?>

      <script>
     
    
     alert("Solicitud de cotizacion enviada correctamente!"); 
window.location.href="index.html";
     </script> 
     
     
<?


?> 