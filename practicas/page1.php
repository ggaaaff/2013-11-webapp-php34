<?

  session_start();
  session_register("ses_var");

  $ses_var = "�Bienvenidos al Centro de Ense�anza Virtual!";

  echo "El contenido de \$ses_var es $ses_var<br>";

?>
<a href = "page2.php">Siguiente p�gina</a>