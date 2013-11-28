<?

  session_start();

  //2013.11.12 Gustaf - Cambio por deprecated
  if ( isset($_SESSION["ses_var"]) )
    echo "El contenido de \$ses_var es " . $_SESSION['ses_var'] . "<br>";
  else
    echo "El contenido de \$ses_var es NO DEFINIDO<br>";

  // echo "El contenido de \$ses_var is $ses_var<br>";
  //--

  session_destroy();
?>