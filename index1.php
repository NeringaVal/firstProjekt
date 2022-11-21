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

    //tekstas stringai

    //1
    $nameFirst = "Kaen";
    $nameLast = "Revu";

    if (strlen($nameFirst) > strlen($nameLast)) echo $nameLast."<br>";
    else if (strlen($nameFirst) < strlen($nameLast)) echo $nameFirst."<br>";
         else echo $nameFirst. " " . $nameLast."<br>";

    //2
    $nameFirst = "Kaen";
    $nameLast = "Revu";
    echo strtoupper($nameFirst). " " . strtolower($nameLast)."<br>";
    
    //3
    $letter = $nameFirst[0].$nameLast[0];
    echo $letter."<br>";

    //4
    $ilgisFirst = strlen($nameFirst);
    $ilgisLast = strlen($nameLast);
    $word = substr($nameFirst, $ilgisFirst - 3). substr($nameLast, $ilgisLast - 3);
    echo $word."<br>";

    //5
    $txt = "An American in Paris";
    $serch = array("a", "A");
    $newTxt = str_replace($serch, "*", $txt);
    echo $newTxt."<br>";

    //6
    $txt = "An American in Paris";
    $a = substr_count($txt, "a");
    $A = substr_count($txt, "A");
    echo $a + $A."<br>";

    //7
    $txt = array("An American in Paris", "Breakfast at Tiffany", "2001: A Space Odyssey", "It's a Wonderful Life");
    $serch = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
    $ilgis = count($txt);
    for ($i=0; $i < $ilgis; $i++) { 
        $newTxt = str_replace($serch, "", $txt[$i]);
        echo $newTxt."<br>";
    }

    //8
    $txt =  'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
    echo $txt."<br>";
    
    
    //9
    $serch = array(",", ".", ";", ":", "-", "!", "?", "(", ")");
    $txt = array("Don't Be a Menace to South Central While Drinking Your Juice in the Hood", "Tik nereikia gąsdinti Pietu Centro, geriant sultis pas save kvartale");
    foreach ($txt as $txts){
        $kiek = 0;
        $words = str_replace($serch, "", $txts);
        $words = explode(" ", $words);
        $ilgis = count($words);
        for ($i=0; $i < $ilgis; $i++) { 
            if (strlen($words[$i]) <= 5) {  //kodel lietuvisko nepriima
                $kiek++;
            }
        }
        echo $kiek."<br>";
    }
    

    //10
    $txt = "";
	$characters = array_merge(range('A','Z'), range('a','z'));
	$max = count($characters) - 1;
	for ($i = 0; $i < 3; $i++) {
		$rand = mt_rand(0, $max);
		$txt .= $characters[$rand];
	}
    echo $txt."<br>";
    
    //11
    $serch = array(",", ".", ";", ":", "-", "!", "?", "(", ")");
    $txt = array("Don't Be a Menace to South Central While Drinking Your Juice in the Hood", "Tik nereikia gąsdinti Pietu Centro, geriant sultis pas save kvartale");
    $words1 = str_replace($serch, "", $txt[0]);
    $words1 = explode(" ", $words1);
    $words2 = str_replace($serch, "", $txt[1]);
    $words2 = explode(" ", $words2);
    $words = array_merge($words1, $words2);
    $keys = array_rand($words, 9);
    $txt ="";
    for ($i=0; $i < 9; $i++) { 
        $txt = $txt. " " . $words[$keys[$i]];
    }
    echo $txt."<br>";

    
    



 
?>
</body>
</html>