<?

  session_start();

  //2013.11.12 Gustaf - Cambio por deprecated
  $_SESSION['ses_var'] = '¡Bienvenidos al Centro de Enseñanza Virtual!';
  echo "El contenido de \$ses_var es " . $_SESSION['ses_var'] . "<br>";


  // session_register("ses_var");
  // $ses_var = "¡Bienvenidos al Centro de Enseñanza Virtual!";
  // echo "El contenido de \$ses_var es $ses_var<br>";
  //--

?>
<a href = "page2.php">Siguiente página</a>