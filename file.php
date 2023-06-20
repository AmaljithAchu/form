<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $myfile=fopen("C:/xampp/htdocs/wplab/newfile.txt","w")or die("unable to open file");
     $text="Hai Computer Engineer's\n";
     fwrite($myfile,$text);
     $text="How are you?\n";
     fwrite($myfile,$text);
    $myfile=fopen("C:/xampp/htdocs/wplab/newfile.txt","r");
    echo fread($myfile,filesize("C:/xampp/htdocs/wplab/newfile.txt"));
    fclose($myfile);

     ?>
</body>
</html>