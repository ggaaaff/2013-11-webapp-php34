<?
  session_start();

  // 2013.11.12 Gustaf - Actualizado uso de sesión
  if ( isset( $_SESSION['valid_user'] ) )
  {
    $old_user = $_SESSION['valid_user'];  // almacenado para comprobar si ellos estuvieron logged in
    unset( $_SESSION['valid_user'] );
  }
  // $old_user = $valid_user;  // almacenado para comprobar si ellos estuvieron logged in
  // $result = session_unregister("valid_user");
  // --
  session_destroy();
?>
<html>
<body>
<h1>Log out</h1>
<?
  if (!empty($old_user))
  {
    echo "Logged out.<br>";

    // 2013.11.12 Gustaf - DESACTIVADO por no poder depender del valor de session_unregister
    // if ($result)
    // {
    //   // si estuvieron logged in y no están logged out
    //   echo "Logged out.<br>";
    // }
    // else
    // {
    //  // Estaban logged in y no pueden  logged out
    //   echo "No se ha podido hacer logged out.<br>";
    // }

  }
  else
  {
    // si ellos no estaban logged in pero llegan a esta página de algún modo
    echo "No estás logged in, y por tanto no puedes hacer logged out.<br>";
  }
?>
<a href="authmain.php">Volver a la página principal</a>
</body>
</html>