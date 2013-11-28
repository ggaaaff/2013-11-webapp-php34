<?
session_start();


//2013.11.12 Gustaf - Acceso a variables POST.
if ( isset($_POST['userid']) && isset($_POST['password']))
{
  $userid   = $_POST['userid'];
  $password = $_POST['password'];

// if ($userid && $password) //DESACTIVADO
// {
  // Si el usuario ha intentado hacer log in
  $db_conn = mysql_connect("localhost", "root") or die('Not connected : ' . mysql_error());
  
  $db_selected = mysql_select_db("bd_test_login", $db_conn) or die ('Can\'t use bd_test_login : ' . mysql_error());
  // $db_conn = mysql_connect("localhost", "nombreusuario", "contraseña");

  $query = "select * from auth "
           ."where name='$userid' "
           // 2013.11.12 Gustaf - Actualizado
           ." and pass='$password' ";
           // ." and pass=password('$password')";
           // --
  $result = mysql_query($query, $db_conn) or die ('Unable to run query : '.mysql_error());

  // DEBUG Adicional
  // echo "QUERY $query QUERY";
  // $num_rows = mysql_num_rows($result);
  // echo "FILAS $num_rows FILAS";

  // si están en la base de datos registra la id de usuario
  if (mysql_num_rows($result) >0 )
  {
    // 2013.11.12 Gustaf - Actualizado registro variable de sesión
    $_SESSION['valid_user'] = $userid;

    // $valid_user = $userid;
    // session_register("valid_user");
    // --
  }
}

?>


<html>
<body>
<h1>Página Inicio</h1>


<?
  // 2013.11.12 Gustaf - Actualizado verificación variable sesión
  if ( isset($_SESSION["valid_user"]) )
  // if (session_is_registered("valid_user"))
  // --
  {
    $valid_user = $_SESSION["valid_user"];
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