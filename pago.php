<?php
$Articulo = $_POST['Recibi Articulo'];
$Pago = $_POST['Recibi Forma de Pago'];
$Correo = $_POST['Recibi Correo'];
$Direccion = $_POST['Recibi Direccion'];
$Ciudad = $_POST['Recibi Ciudad'];
$Codigo = $_POST['Recibi Codigo Postal'];
$Telefono = $_POST['Recibi Telefono'];

echo "<h2>Informacion recibida desde PHP</h2>";
echo "El articulo recibido es: " . $Articulo . "<br/>";
echo "La forma de pago recibida es: " . $Pago . "<br/>";
echo "El E-mail recibido es: " . $Correo . "<br/>";
echo "La Direccion recibida es: " . $Direccion . "<br/>";
echo "La Ciudad recibida es: " . $Ciudad . "<br/>";
echo "El Codigo Postal recibido es: " . $Codigo . "<br/>";
echo "El Telefono recibido es: " . $Telefono . "<br/>";

?>