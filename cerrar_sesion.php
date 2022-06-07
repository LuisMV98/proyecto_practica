<?php
  session_start();
  echo "cerrar";
  unset($_SESSION['corr']);
  unset($_SESSION['nomb']);
  unset($_SESSION['edad']);
  unset($_SESSION['naci']);
  unset($_SESSION['tipo']);
  session_destroy();
  header("Location: pagina3.php");
  exit;
?>