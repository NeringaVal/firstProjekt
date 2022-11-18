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
    $firstName = "Neringa";
    $lastName = "Valeikienė";
    $data = 1970;
    $nowYear = 2022;
    $Years = $nowYear - $data;
    echo "<p> Aš esu  $firstName  $lastName. Man yra $Years metų </p>";
    echo "Aš esu ". $firstName ." ". $lastName. ". Man yra " . $Years . " metų"."<br>"; 

    $firstNamber = rand(0, 4);
    $secondNamber = rand(0, 4);
    if ($firstNamber > $secondNamber) {
        if ($secondNamber != 0) {
            $dalmuo = $firstNamber / $secondNamber;
            echo round($dalmuo , 2);
        } else{
            echo "<p> Dalyba negalima</p>";
        } 
    }
    else  {
        if ($firstNamber != 0) {
            $dalmuo = $secondNamber / $firstNamber;
            
            echo round($dalmuo , 2);
        } else {
            echo "<p> Dalyba negalima</p>";
        }
    }
    
    $a = rand(1, 10);
    $b = rand(1, 10);
    $c = rand(1, 10);
    if ($a < $b + $c && $b < $a + $c && $c < $a + $b) {
        echo "<p> Galima</p>";
    }
    else  {
        echo "<p> negalima</p>";
    }
 
?>
</body>
</html>