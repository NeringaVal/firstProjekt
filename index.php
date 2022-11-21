<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hi</h1>
    <?php
    

    echo "3.02". "<br>";
    $count = 0;
    for ($i=0; $i < 300; $i++) { 
        $num = rand(0, 300);
        if ($num > 275)  {
            echo '<span style="color: red;"> ' . $num. " ". '</span>';
        } else echo $num. " ";
        if ($num > 150) $count++;
    }
    echo "<br>";
    echo "count = ". $count."<br>";
    
    echo "<br>";
    echo "3.03". "<br>";
    $num = rand(3000, 4000);
    for ($i=77; $i < $num ; $i+=77) { 
        if ($num - $i > 77 ) echo $i. ",";
        else echo $i;
    }

    echo "<br>";
    echo "<br>";
    echo "3.06". "<br>";
    echo "a". "<br>";
    $num = rand(0, 1);
    while ($num != 0) {
        echo "S";
        $num = rand(0, 1);
    }
    echo "H". "<br>";
    echo "b". "<br>";
    $count = 0;
    while ($count < 3) {
        $num = rand(0, 1);
        if ($num == 1) echo "S";
        else {
            echo "H";
            $count++;
        }
        
    }
    echo "<br>";
    echo "c". "<br>";
    $count = 0;
    $log = false;
    while ($count < 3) {
        $num = rand(0, 1);
        if ($num == 1) {
            echo "S";
            $log = false;
        }
        else {
            echo "H";
            $log = true;
        }
        if ($log) $count++;
        else $count = 0;
    }
    echo "<br>";
    echo "<br>";
    echo "3.10". "<br>";
    echo "a". "<br>";
    
    $count = 0;
    for ($i=0; $i < 5; $i++) { 
        $ilgis = 85;
        while ($ilgis > 0) {
            $smugis = rand(5, 20);
            $count++;
            $ilgis -= $smugis;
        }
    }
    echo "Smugiu prireiks: ". $count. "<br>";

    echo "b". "<br>";
    
    $count = 0;
    for ($i=0; $i < 5; $i++) { 
        $ilgis = 85;
        while ($ilgis > 0) {
            $pataikyta =rand(0, 1);
            if ($pataikyta == 1){
                $smugis = rand(20, 30);
                $ilgis -= $smugis;
            }     
            $count++;
        }
    }
    echo "Smugiu prireiks: ". $count. "<br>";
?>
</body>
</html>