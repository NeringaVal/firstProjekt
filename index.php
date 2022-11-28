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

    echo "6.07". "<br>";
    function Masyvas($m){
        
        
        $array = [];
        $n = rand(10, 20);
        for ($i=0; $i < $n - 1; $i++) { 
            $array[$i] = rand(0, 10);
        }
        if ($m == 1) {
            $array[$n - 1] = 0;
        }
        else {
            $array[$n - 1] = Masyvas($m - 1);
        }

        return $array;
    }
  

    $m = rand(10, 30);
    echo "m= ". $m."<br>";
    $array = [];
    $array = Masyvas($m);
    echo "Pradinis <br>";
    print_r($array);
    echo "<br>";

    echo "6.08". "<br>";
    function Suma($array, $m){
        $sum = 0;
        $kiek = sizeof($array) - 1;
        for ($i=0; $i < $kiek; $i++) { 
            $sum += $array[$i];
        }
        echo "Suma = ". $sum."<br>";
        if ($m == 1) echo "Sumos suskaičiuotos.<br>";
        else Suma($array[$kiek], $m - 1);
    }

    Suma($array, $m);

    echo "6.09". "<br>";
    $array = [];
    for ($i=0; $i < 3; $i++) { 
        $array[$i] = rand(1, 33);
    }
    $nr = 3;
    while(true){
        $num1 = Dalijasi($array[$nr - 1]);
        $num2 = Dalijasi($array[$nr - 2]);
        $num3 = Dalijasi($array[$nr - 3]);
        if ($num1 === 0 and $num2 === 0 and $num3 === 0) {
            break;
        }
        else {
            $array[$nr] = rand(1, 33);
            $nr++;
        }
        
    }
    echo "Pradinis <br>";
    print_r($array);
    echo "<br>";
?>
</body>
</html>