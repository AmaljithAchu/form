<!DOCTYPE html>
<html>
    <head>
        <title>employee details</title>
        
    </head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <style>
    body {background-color: floralwhite;}
    

</style>

    <body>
        <br>
        <br>
        <form name="emp" method="POST" action="details.php">
            <table align="center" border="1" width="30%">
                <tr><th colspan="2"align="center" bgcolor="yellow">EMPLOYEE DETAILS</th></tr>
                <tr><th align="center" bgcolor="red">Employee Name<td><input type="text" name="n" bgcolor="red"></input></td></tr>
                <tr><th align="center" bgcolor="blue">Employee ID<td><input type="text" name="m"></input></td></tr>
                <tr><th align="center" bgcolor="green">Basic Pay<td><input type="text" name="bp"></input></td></tr>
                <tr><th align="center" bgcolor="grey">House Rent Allowance<td><input type="text" name="hra"></input></td></tr>
                <tr><th align="center" bgcolor="brown">Dearness Allowance<td><input type="text" name="da" onfocus="dacalc()"></input></td></tr>
                <tr><th align="center" bgcolor="pink">Total Salary<td><input type="text" name="ts" onfocus="tscalc()"></input></td></tr>
                <tr><td><input type="reset" value="cancel"></input></td>
                <td><input type="submit" value="save"></input></td></tr>
            </table>
        </form>
    </body>
    <script type="text/javascript">
        function dacalc() 
        {
            var a=document.emp.bp.value;
            var d=parseInt(a)*65/100;
            document.emp.da.value=d;

        }
        function tscalc() 
        {
            var b=document.emp.bp.value;
            var c=document.emp.hra.value;
            var e=document.emp.da.value;
            var f=parseInt(b)+parseInt(c)+parseInt(e);
            document.emp.ts.value=f;
        }
        </script>

</html>