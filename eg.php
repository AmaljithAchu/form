
<html>
<head>
<title>Palindrome</title>
<style>
    h1{color :red;}
    table, td, th {
  border: 1px solid;
}



</style>
</head>

<body>
<form action="" method="post">
<br><center><h1>PALINDROME</h1></center> <br><table bgcolor="green" align="center"> 
<tr><td><br><input type="text" value=" Enter a Number" readonly> <input type="text" name="n"></tr></td>
 <tr><td><br><center><br>
<input type="submit" value="&nbsp;&nbsp; SUBMIT &nbsp;&nbsp;"> <br><br><br></center></tr></td></table>
</form>
<?php
if($_POST)
{
$n1=$_POST["n"];
$p=$n1;
$s=0;
while($n1>=1)
{
$r=$n1%10;
 $n1=$n1*(10/100);
 $s=$s*10+$r;
}
echo '<table align="center" border="2" width="29%"> <tr align="center"><td><br>';
echo '<font color="black">';
 if($p==$s) echo"<h2> $p is Palindrome Number</h2>";
else
echo"<h2> $p is not Palindrome Number</h2>"; 
}
echo'</font>';
echo'</td></tr></table>';
?>
</body>
</html>