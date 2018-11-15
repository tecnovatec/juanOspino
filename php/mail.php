<?php
   //Reseteamos variables a 0.

   echo "<script language='javascript'>
   alert('Mensaje enviado, muchas gracias.');
</script>";
   $nombre;
   $email; 
   $telefono; 
    $para; 
    $headers;
    $msjCorreo;

   if (isset($_POST['submit'])) {
      //Obtenemos valores input formulario
      $nombre = $_POST['nombre'];
      $email = $_POST['email'];
      $telefono = $_POST['telefono'];   
      $para = 'raulortiz11@gmail.com';

      //Creamos cabecera.
      $headers = 'From' . " " . $email . "\r\n";
      $headers .= "Content-type: text/html; charset=utf-8";

      //Componemos cuerpo correo.
      $msjCorreo = "Nombre: " . $nombre;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Email: " . $email;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Telefono Contacto: " . $telefono;
      $msjCorreo .= "\r\n";
      

    if (mail($para, $telefono, $msjCorreo, $headers)) {
         echo "<script language='javascript'>
            alert('Mensaje enviado, muchas gracias.');
         </script>";
    } else {
         echo "<script language='javascript'>
            alert('fallado');
         </script>";
    }
  }
?>