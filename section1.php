<?php
session_start();
?>
<html>
<body>
<?php
$_SESSION["username"] = "Anandhu";
$_SESSION["password"] = "Anandhu@123";
echo "Session variables are set.<br>";
echo "  Username is " . $_SESSION["username"] . ".<br>"; echo "Password is " . $_SESSION["password"] . "."; session_destroy();
?>
</body>
</html>
