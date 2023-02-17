<?php
if (isset($_POST['device'])) {
  $device = $_POST['device'];
  if ($device === 'switch') {
    header('Location: switch_form.html');
  } elseif ($device === 'router') {
    header('Location: router_form.html');
  } else {
    echo "Opción inválida.";
  }
  exit;
}
?>
