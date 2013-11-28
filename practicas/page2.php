<?

  session_start();

  echo "El contenido de \$ses_var es $ses_var<br>";

  session_unregister("ses_var");
?>
<a href = "page3.php">Siguiente página</a>