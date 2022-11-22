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

    echo "<br>";

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
    $rand_letter = "";
    for ($i=0; $i < 200; $i++) { 
        $int = rand(0,3);
        $rand_letter = $rand_letter. $a_d[$int];
    }
    echo $rand_letter. "<br>";
    $a = substr_count($rand_letter, "A");
    echo "A: ". $a."<br>";
    $b = substr_count($rand_letter, "B");
    echo "B: ". $b."<br>";
    $c = substr_count($rand_letter, "C");
    echo "C: ". $c."<br>";
    $d = substr_count($rand_letter, "D");
    echo "D: ". $d."<br>";

    echo "4.04". "<br>";
    $sort = str_split($rand_letter);
    sort($sort);
    $sort = implode($sort);
    echo $sort."<br>";;
?>
</body>
</html>