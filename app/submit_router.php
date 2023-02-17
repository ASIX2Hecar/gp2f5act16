<?php
$banner = $_POST['banner'];
$password = $_POST['password'];
$password2 = $_POST['password'];
$password3 = $_POST['password'];
$hostname = $_POST['hostname'];
$ip_fa = $_POST['ip_fa'];
$serial = $_POST['serial'];
$serial_clock = $_POST['serial_clock'];
$hora = $_POST['hora'];
$routing = $_POST['routing'];

echo "! Configuración del banner\n<br>";
echo "banner login " . $banner . "\n\n<br><br>";

echo "! Configuración de la contraseña\n<br>";
echo "enable password " . $password . "\n\n<br><br>";

echo "! Password de acceso via telnet<br>";
echo "line vty 0 15<br>password " . $password2 . "\n<br><br>"; 

echo "! Password de acceso desde la consola via RS232<br>";
echo "enable password " . $password3 . "\n<br><br>"; 

echo "! Configuración del nombre de host\n<br>";
echo "hostname " . $hostname . "\n\n<br><br>";

echo "! Configuración de la dirección IP de la interfaz Fast Ethernet\n<br>";
echo "interface FastEthernet 0/0\n<br>";
echo "ip address " . $ip_fa . "\n\n<br><br>";

echo "! Configuración de la línea serial\n<br>";
echo "interface Serial " . $serial . "\n<br>";
echo "clock rate " . $serial_clock . "\n\n<br><br>";

echo "! Configuración de la hora\n<br>";
echo "clock set " . $hora . "\n\n<br><br>";

echo "! Configuración del enrutamiento\n<br>";
if ($routing == 1) {
  echo "ip routing\n\n<br><br>";
}

echo "! Guardar la configuración\n<br>";
echo "write memory\n<br>";
?>
