<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>employeedetails</title>
</head>
<body>
<?php
    $con=mysqli_connect('localhost','root','');// or die(mysqli_error());
    $db=mysqli_select_db($con,'amaljith'); //or die(mysqli_error());
    $qry="insert into amaljith123 values ('$_POST[n]','$_POST[m]','$_POST[bp]','$_POST[hra]','$_POST[da]','$_POST[ts]')";
    $result=mysqli_query($con,$qry); //or die(mysqli_error());
    $qry1= "select * from amaljith123";
    $result1=mysqli_query($con,$qry1); //or die(mysqli_error());
    ?>
     <table align="center" border="2">
     <tr><th colspan="7">Employee details</th></tr>
     <tr><th>Employee name</th><td>Employee id</td><td>Basic pay</td><td>House Rent Allowance</td>
    <td>Dearness Allowance</td><td>Total salary</td></tr>
    <?php
    while($row=mysqli_fetch_row($result1))
    {
            echo"<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td>
            <td>$row[4]</td><td>$row[5]</td> </tr>";

    }
    ?>
</body>
</html>