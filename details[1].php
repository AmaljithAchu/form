<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<body>
<?php

echo"<br><br><br><table name='f'align='center' border='1' width='70%'>
<tr><th colspan='6' align='center'>EMPLOYEE DETAILS</th></tr>
<tr><th>Employee Name</th>
    <th>Employee ID</th>
    <th>Basic Pay</th>
    <th>House Rent Allowance</th>
    <th>Dearness Allowance</th>
    <th>Total Salary</th></tr>
<tr><td align='center'>$_POST[n]</td>
    <td align='center'>$_POST[m]</td>
    <td align='center'>$_POST[bp]</td>
    <td align='center'>$_POST[hra]</td>
    <td align='center'>$_POST[da]</td>
    <td align='center'>$_POST[ts]</td></tr></table>";

?>
</body>
</html>
