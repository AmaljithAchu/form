<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        h1{text-align:center;}
    </style>
</head>
<body>
    <br>
    <br>
<div class="container">
  <div class="row">
    <div class="col">

    </div>

    <div class="col">
    <div class="card">
  <div class="card-header">
  <h1 style="color:red">Calculator</h1>
  </div>
  <div class="card-body">
    
 
    
    <form method="post">
            
            First Number :<input type="text" name="numb1">
            Second Number:<input type="text" name="numb2">
            Select Your choice:<select name="operator" id="">
               <option>None</option>
               <option>Addition</option>
               <option>Subtract</option>
               <option>Multiply</option>
               <option>Divide</option>
              
            </select>

           <input type="submit" value=" RESULT " name="submit">
           <input type="text" value="<?php echo @$res; ?>" readonly="true"/>
           
        </form>

    

        <?php 

            if (isset($_POST['submit'])) {
                $result1 = $_POST['numb1'];
                $result2 = $_POST['numb2'];
                $operator = $_POST['operator'];
                switch ($operator) {
                    case 'None':
                        echo "You need to select any operator";
                        break;
                    case 'Addition':
                        $res= $result1 + $result2;
                        break;
                    case 'Subtract':
                        $res=$result1 - $result2;
                        break;
                    case 'Multiply':
                        $res=$result1 * $result2;
                        break;
                    case 'Divide':
                        $res=$result1 / $result2;
                        break;
                   
                }
            }


         ?>
          </div>
</div>
    </div>
    <div class="col">

    </div>
  </div>
</div>

</body>
</html>