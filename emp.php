<!DOCTYPE html>
<html>
    <head>
        <title>employee details</title>

    </head>
    <style>
    body {background-color: floralwhite;}
    table, td, th {
  border: 1px solid;
}

table {
  width: 30%;
  border-collapse: collapse;
}

</style>
    <body>
        <br>
        <br>
        <form name="emp" method="POST" action="view.php">
            <table align="center">
                <tr><th colspan="2" align="center" >EMPLOYEE DETAILS</th></tr>
                <tr><th align="center" >Employee Name<td>
                    <input type="text" name="n" ></input></td></tr>
                <tr><th align="center" >Employee ID<td>
                    <input type="text" name="m"></input></td></tr>
                <tr><th align="center" >Basic Pay<td>
                    <input type="text" name="bp"></input></td></tr>
                <tr><th align="center" >House Rent Allowance<td>
                    <input type="text" name="hra"></input></td></tr>
                <tr><th align="center" >Dearness Allowance<td>
                    <input type="text" name="da" onfocus="dacalc()"></input></td></tr>
                <tr><th align="center" >Total Salary<td>
                    <input type="text" name="ts" onfocus="tscalc()"></input></td></tr>
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