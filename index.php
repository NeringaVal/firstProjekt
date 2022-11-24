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
    

    
    echo "Funkcija". "<br>";
    echo "6.01". "<br>";
    
    function First($arg) {
        echo "<h1> ". $arg . " </h1>";
    };

    First ("Hallo");

    echo "6.02". "<br>";
    
    function Second($arg1, $arg2) {
        echo "<h".$arg2."> ". $arg1 . " </h".$arg2.">";
    };

    Second ("Hallo", 2);

    echo "6.04". "<br>";
    function Dalijasi(int $num) {
        $count = 0;

        for ($i=2; $i < $num; $i++) { 
            if ($num % $i === 0) {
                $count++;   
            }
        }
        return $count;
    }
    $num = 12;
    echo "Skaičius ".$num. " dalijasi iš ".Dalijasi(12). " skaičių <br>";;

    echo "6.05". "<br>";
    $ary = [];
    for ($i=0; $i < 100; $i++) { 
        $ary[$i] = rand(33, 77);
    }
    echo "Pradinis <br>";
    print_r($ary);
    echo "<br>";
    for ($i=0; $i < count($ary) ; $i++) { 
        for ($j=$i; $j < count($ary); $j++) { 
            if (Dalijasi($ary[$i]) < Dalijasi($ary[$j])){
                $temp = $ary[$i];
                $ary[$i] = $ary[$j];
                $ary[$j] = $temp;
            }
        }
    }
    echo "Surūšiuotas  <br>";
    print_r($ary);
    echo "<br>";

    echo "6.06". "<br>";
    $ary = [];
    for ($i=0; $i < 100; $i++) { 
        $ary[$i] = rand(333, 777);
    }
    echo "Pradinis <br>";
    print_r($ary);
    echo "<br>";
    echo "Pirminiai <br>";
    for ($i=0; $i < 100; $i++) { 
        if (Dalijasi($ary[$i]) == 0) echo $ary[$i].", ";
    }
    echo "<br>";

    echo "6.06". "<br>";
    function Masyvas($m){
        
        
        $array = [];
        $n = rand(10, 20);
        echo $n."<br>";
        for ($i=0; $i < $n - 1; $i++) { 
            $array[$i] = rand(0, 10);
        }
        return $array;
    }
    $array = Masyvas();
    $array[] = 0;

    $m = rand(10, 30);
    $array = Masyvas($m);
    echo "Pradinis <br>";
    print_r($array);
    echo "<br>";
?>
</body>
</html>