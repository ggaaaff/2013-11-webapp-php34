<?
session_start();

if ($userid && $password)
{
  // Si el usuario ha intentado hacer log in

  $db_conn = mysql_connect("localhost", "nombreusuario", "contraseña");
  mysql_select_db("nombreBaseDatos", $db_conn);
  $query = "select * from auth "
           ."where name='$userid' "
           ." and pass=password('$password')";
  $result = mysql_query($query, $db_conn);
  if (mysql_num_rows($result) >0 )
  {
    // si están en la base de datos registra la id de usuario
    $valid_user = $userid;
    session_register("valid_user");
  }
}
?>
<html>
<body>
<h1>Página Inicio</h1>
<?

  if (session_is_registered("valid_user"))
  {
    echo "Ahora estás logged in como: $valid_user <br>";
    echo "<a href=\"logout.php\">Log out</a><br>";
  }
  else
  {
    if (isset($userid))
    {
      // si han intentado hacer login y ha fallado
      echo "No has podido hacer login";
    }
    else
    {
      // si no han intentado hacer login  y no han hecho logged out
      echo "No has hecho logged in.<br>";
    }

    // provee el formulario para hacer  log in
    echo "<form method=post action=\"authmain.php\">";
    echo "<table>";
    echo "<tr><td>Userid:</td>";
    echo "<td><input type=text name=userid></td></tr>";
    echo "<tr><td>Contraseña:</td>";
    echo "<td><input type=password name=password></td></tr>";
    echo "<tr><td colspan=2 align=center>";
    echo "<input type=submit value=\"Log in\"></td></tr>";
    echo "</table></form>";
  }
?>
<br>
<a href="members_only.php">Sección de Miembros</a>
</body>
</html>