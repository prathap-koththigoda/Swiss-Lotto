<html>
<head>
    <meta charset="UTF-8">
    <title>Lotto</title>
</head>
<body>
<?php

echo "SWISS LOTTO";
echo "<br>";
echo "<br>";
// leer Array
$VollZahlen = [];

echo "Nummer 1 bis 42 ";
echo "<br>";

//Nummer 1 bis 42
for($x=1; $x<=42; $x++){
	$VollZahlen[$x] = $x ; 
}

//implode = Zahlen auf eine Reihe mit Commas
echo implode(',', $VollZahlen);

echo "<br>";
echo "<br>";

//in Array = scuhe, ob bestimmte Zahlen geben.
$numebers = range(1, 42);

if (in_array(1, $numebers))
  {
  echo "Match found";
  }
else
  {
  echo "Match not found";
  }

echo "<br>";
echo "<br>";

//rand = Zufallnummer generieren
echo "6 Glückzahlen";
echo "<br>";

$a = rand(1, 42).","."\n";
echo $a;
$b = rand(1, 42).","."\n";
echo $b;
$c = rand(1, 42).","."\n";
echo $c;
$d = rand(1, 42).","."\n";
echo $d;
$e = rand(1, 42).","."\n";
echo $e;
$f = rand(1, 42)."\n";
echo $f;

echo "<br>";
echo "<br>";

//shuffling = mixing
$shuffle_array = array($a,$b,$c,$d,$e,$f);

shuffle($shuffle_array);
print_r($shuffle_array);

echo "<br>";
echo "<br>";

echo "Gewinn Zahl";
echo "<br>";

//ein Zufallnummer wählen von gegebenen Nummmern 
$y=array($a,$b,$c,$d,$e,$f);
$random_keys=array_rand($y,2);
echo $y[$random_keys[0]];


?>
</body>
</html>
