<h1>Oppgave 2</h1>

<?php

if(isset($_POST['submit']))
{
    $file = fopen("files/hello.txt", "a");
    $date = date("D.M.Y, H:i:s") ."\n";
    fwrite($file, $date);
    fclose($file);
}

if(isset($_POST['submit2']))
{
    $file = file("files/hello.txt");
    
    $arr = array_slice($file, -10,10);


    foreach($arr as $value)
    {
        echo $value . "<br>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="Logg">Logg</label>
        <input type="submit" name="submit" value="loggfør"></input>
    </form>



    <form action="" method="post">
        <label for="Logg">Vise frem hendelsene</label>
        <input type="submit" name="submit2" value="Vis frem loggen"></input>
    </form>
    
</body>
</html>

