<?
  session_start();

  echo "<h1>Sólo Miembros</h1>";

  // comprobar variables de sesión

  if ( isset( $_SESSION['valid_user'] ) ) // 2013.11.12 Gustaf - Actualizado
  // if (session_is_registered("valid_user"))
  {
    echo "<p>Estás logged in como " . $_SESSION['valid_user'] . ".</p>"; // 2013.11.12 Gustaf - Actualizado
    echo "<p>El contenido sólo para miembros va aquí</p>";
  }
  else
  {
    echo "<p>No estás logged in.</p>";
    echo "<p>Sólo los miembros logueados pueden ver esta página.</p>";
  }

  echo "<a href=\"authmain.php\">Volver a la página principal</a>";
?>