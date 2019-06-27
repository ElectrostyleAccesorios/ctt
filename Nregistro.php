<?php
$Nombre = $_POST['Recibi Nombre'];
$Apellido= $_POST['Apellido'];
$Correo = $_POST['Recibi Correo'];
$Contraseña = $_POST['Recibi Contraseña'];
$RepetirContraseña = $_POST['Recibi Repetir Contraseña'];
$Telefono = $_POST['Recibi Telefono'];

echo "<h2>Informacion recibida desde PHP</h2>";
echo "El Nombre recibido es:" . $Nombre . "<br/>";
echo "El Apellido recibido es: ". $Apellido . "<br/>";
echo "El Correo recibido es: " . $Correo . "<br/>";
echo "La Contraseña recibida es: " . $Contraseña . "<br/>";
echo "La Repetida Contraseña recibida es: " . $RepetirContraseña . "<br/>";
echo "El Telefono recibido es: " . $Telefono . "<br/>";
?>