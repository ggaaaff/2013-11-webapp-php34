<?

  session_start();

  //2013.11.12 Gustaf - Cambio por deprecated
  echo "El contenido de \$ses_var es " . $_SESSION['ses_var'] . "<br>";
  unset( $_SESSION['ses_var'] );

  // echo "El contenido de \$ses_var es $ses_var<br>";
  // session_unregister("ses_var");
  //--


?>
<a href = "page3.php">Siguiente página</a>