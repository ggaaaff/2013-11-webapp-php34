<?
  session_start();

  echo "<h1>Sólo Miembros</h1>";

  // comprobar variables de sesión

  if (session_is_registered("valid_user"))
  {
    echo "<p>Estás logged in como $valid_user.</p>";
    echo "<p>El contenido sólo para miembros va aquí</p>";
  }
  else
  {
    echo "<p>No estás logged in.</p>";
    echo "<p>Sólo los miembros logueados pueden ver esta página.</p>";
  }

  echo "<a href=\"authmain.php\">Volver a la página principal</a>";
?>