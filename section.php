<html>
<body>
<form name="register" method ="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
Username: <input type="text" name="user" > <br>
Password : <input type="text" name="pass"> <br>
<input type="submit" name="submit">
</form>
<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
$_SESSION["username"] = $_POST['user'];
$_SESSION["password"] = $_POST['pass'];
echo "Session variables are set.<br>";
echo "  Username is " . $_SESSION["username"] . ".<br>"; echo "Password is " . $_SESSION["password"] . ".";
}
session_destroy();
?>
</body>
</html>
