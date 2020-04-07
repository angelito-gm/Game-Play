<?php   

 $destinatario = 'angelitogm625@gmail.com';
 $nombre = $_POST['nombre'];
 $email = $_POST['email'];
 $mensaje = $_POST['mensaje'];
 
 $header = 'Nuevo participante en el sorteo de los 5000 diamantes';
 
 $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

 mail($nombre, $email, $mensaje, $header);
 echo '<script>alert('Mensaje enviado exitosamente!')</script>'
 echo '<script> setTimeout(\"location.href:'index.html'\")</script>'


?>
