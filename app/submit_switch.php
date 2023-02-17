<?php
if (isset($_POST['banner']) && isset($_POST['password']) && isset($_POST['hostname']) && isset($_POST['ip_vlan_1']) && isset($_POST['hora'])) {
  $banner = $_POST['banner'];
  $password = $_POST['password'];
  $password2 = $_POST['password'];
  $password3 = $_POST['password'];
  $hostname = $_POST['hostname'];
  $ip_vlan_1 = $_POST['ip_vlan_1'];
  $hora = $_POST['hora'];

  echo "banner login #\n<br>";
  echo $banner . "\n<br>";
  echo "#\n<br><br>";

  echo "! Password encriptada de acceso a modo privilegiado<br>";
  echo "enable password " . $password . "\n<br><br>";

  echo "! Password de acceso via telnet<br>";
  echo "line vty 0 15<br>password " . $password2 . "\n<br><br>"; 

  echo "! Password de acceso desde la consola via RS232<br>";
  echo "configure terminal<br>";
  echo "username <usuari> password" . $password3 . "<br><br>";

  echo "hostname " . $hostname . "\n<br><br>";

  echo "interface vlan 1\n<br><br>";

  echo "ip address " . $ip_vlan_1 . "\n<br><br>";

  echo "clock set " . $hora . "\n<br>";
}
?>
