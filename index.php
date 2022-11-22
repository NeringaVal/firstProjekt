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
    

    
    echo "Masyvai". "<br>";
    echo "4.01". "<br>";
    
    for ($i=0; $i < 30; $i++) { 
        $ary[$i] = rand(5, 25);
    }
    print_r($ary);

    echo "<br>";
    
    echo "4.02". "<br>";
    echo "a". "<br>";
    $count = 0;
    for ($i=0; $i < 30; $i++) { 
        if ($ary[$i] > 10) $count++;
    }
    echo "count >10 = ". $count. "<br>";
    
    echo "b". "<br>";
    $mmax = $ary[0];
    for ($i=1; $i < 30; $i++) { 
        if ($ary[$i] > $mmax) $mmax = $ary[$i];
    }
    echo "Max = ". $mmax. "<br>";
    echo "Jų indeksas masyve:". "<br>";
    for ($i=0; $i < 30; $i++) {
        if ($ary[$i] == $mmax) echo $i. " ";
    } 
    echo "<br>";   
    
    echo "c". "<br>";
    $suma_poriniu = 0;
    for ($i=0; $i < 30; $i+=2) { 
        $suma_poriniu += $ary[$i];
    }
    echo "Suma porinių = ". $suma_poriniu. "<br>";
   
    echo "d". "<br>";
    for ($i=0; $i < 30; $i++) { 
        $ary_n[$i] = $ary[$i] - $i;
    }
    print_r($ary_n);
    echo "<br>";

    echo "e". "<br>";
    for ($i=30; $i < 40; $i++) { 
        $ary[$i] = rand(5, 25);
    }
    print_r($ary);
    echo "<br>";

    echo "f". "<br>";
    for ($i=0; $i < 20; $i++) { 
        $ary1[$i] = $ary[$i * 2];
        $ary2[$i] = $ary[$i * 2 + 1];
    }
    echo "Iš lyginių". "<br>";
    print_r($ary1);
    echo "<br>";
    echo "Iš nelyginių". "<br>";
    print_r($ary2);
    echo "<br>";

    echo "g". "<br>";
    for ($i=0; $i < 30; $i+=2) { 
        if ($ary[$i] > 15) $ary[$i] = 0;
    }
    print_r($ary);
    echo "<br>";

    echo "h". "<br>";
    for ($i=0; $i < 40; $i++) { 
        if ($ary[$i] == 10){
            echo $i. "<br>";
            break;
        }
    }

    echo "i". "<br>";
    for ($i=0; $i < 40; $i += 2) { 
        unset($ary[$i]);
    }
    print_r($ary);
    echo "<br>";

    echo "4.03". "<br>";
    
    $a_d = "ABCD";
    for ($i=0; $i < 200; $i++) { 
        $int = rand(0,3);
        $rand_letter[$i] = $a_d[$int];
    }
    print_r($rand_letter);
    echo "<br>";
    $str = implode("", $rand_letter);
    $a = substr_count($str, "A");
    echo "A: ". $a."<br>";
    $b = substr_count($str, "B");
    echo "B: ". $b."<br>";
    $c = substr_count($str, "C");
    echo "C: ". $c."<br>";
    $d = substr_count($str, "D");
    echo "D: ". $d."<br>";

    echo "4.04". "<br>";
    
    sort($rand_letter);
    print_r($rand_letter);
    echo "<br>";

    echo "4.05". "<br>";
    $a_d = "ABCD";
    for ($i=0; $i < 200; $i++) { 
        $int = rand(0,3);
        $rand_1[$i] = $a_d[$int];
    }
    echo "Pirmas:"."<br>";
    print_r($rand_1);
    echo "<br>";
    for ($i=0; $i < 200; $i++) { 
        $int = rand(0,3);
        $rand_2[$i] = $a_d[$int];
    }
    echo "Antras:"."<br>";
    print_r($rand_2);
    echo "<br>";
    for ($i=0; $i < 200; $i++) { 
        $int = rand(0,3);
        $rand_3[$i] = $a_d[$int];
    }
    echo "Trečias:"."<br>";
    print_r($rand_3);
    echo "<br>";
    for ($i=0; $i < 200; $i++){
        $suma[$i] = $rand_1[$i]. $rand_2[$i]. $rand_3[$i];
    }
    echo "Suma:"."<br>";
    print_r($suma);
    echo "<br>";
    $r = array_filter(array_count_values($suma), function($v) { return $v == 1; });
    echo "Atrinkti nepasikartojantys:"."<br>";
    print_r($r);
    echo "<br>";
    echo count($r)."<br>";

    echo "4.06". "<br>";
    $random_number_array = range(0, 100);
    shuffle($random_number_array );
    $random_number_array = array_slice($random_number_array ,0,10);

    print_r($random_number_array);
?>
</body>
</html>