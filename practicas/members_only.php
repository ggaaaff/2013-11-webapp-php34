<?
  session_start();

  echo "<h1>S�lo Miembros</h1>";

  // comprobar variables de sesi�n

  if (session_is_registered("valid_user"))
  {
    echo "<p>Est�s logged in como $valid_user.</p>";
    echo "<p>El contenido s�lo para miembros va aqu�</p>";
  }
  else
  {
    echo "<p>No est�s logged in.</p>";
    echo "<p>S�lo los miembros logueados pueden ver esta p�gina.</p>";
  }

  echo "<a href=\"authmain.php\">Volver a la p�gina principal</a>";
?>