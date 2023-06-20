<?php

if(isset($_POST['disp'])) {

$f=$_POST['f'];

$s=$_POST['s']; 
$ch=$_POST['ch'];
switch($ch)
{ 
case 'ADDITION':

$res=$f+$s;

break;
case 'SUBTRACTION':

$res=$f-$s;

break;

case 'MULTIPLICATION':

$res=$f*$s;

break;

case 'DIVISION':

$res=$f/$s;

break;
}
}

?>
<!doctype html>
<html>
<head>
    <title>calculator</title>
    <style>
        h1{
            color:floralwhite;
            font-size:x-large;
          }
    </style>
</head>
<body bgcolor="floralwhite">

<form action="" method="post">

<table align="center" border="1" width="20%"><br><br> 
<tr bgcolor="green"><td align="center" colspan="2">
     <h1>CALCULATOR</h1></td></tr> <tr><td>
    <input type="" value="Enter First Number "></td>
<td><input type="text" name="f"></td></tr> <tr><td>
    <input type="" value="Enter Second Number"></td>

<td><input type="text" name="s"></td></tr> <tr><td>
    <input type="" value="Select Your Choice"></td>

<td><center><select name="ch">

<option>ADDITION</option>

<option>SUBTRACTION</option>
 <option>MULTIPLICATION</option>

<option>DIVISION</option> 
</center></select></td></tr>

<tr><td><input type="submit" value=" RESULT"
name="disp"></td>

<td><input type="text" value="<?php echo @$res; ?>"readonly=true/>

</td></tr></table>
</form>

</body></html>

