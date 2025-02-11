<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizi1-2-3</title>
<link rel="stylesheet" href="ciao.css">
</head>
<body>
    <?php
echo"Esercizio frutta Uno";
$array = array("MelCotogn", "Per'", "Precoc", "Cerac'");
echo "<table border='2'>";
echo "<tr><th>Frutta</th></tr>";  

for($i = 0; $i < sizeof($array); $i++) 
{
    echo "<tr>";
    echo "<td>" . $array[$i] . "</td>";
    echo "</tr>";  
}
echo "</table>";

echo"<br>";
echo"Esercizio frutta Due";

$cibo=array(["MelCotogn", "Per'", "Precoc"],["Tortne'","KevelFiur","Petan'"]);
echo "<table border='2'>";
echo "<tr><th>Frutta</th>"; 
echo "<th>Verudra</th></tr>";  
for($i = 0; $i < sizeof($cibo); $i++) {
    echo "<tr>";
    if (isset($cibo[0][$i])) {
        echo "<td>" . $cibo[0][$i] . "</td>";
    } else {
        echo "<td></td>";
     }

    if (isset($cibo[1][$i])) {
        echo "<td>" . $cibo[1][$i] . "</td>";
    } else {
        echo "<td></td>";
    }
    echo "</tr>";
    
}
$immagine = "dolomiti";
if($immagine =="dolomiti")
{
?>
<div>
    <p>Immagine delle dolomiti</p>
</div>
<?php
}else{
    echo"Altra immagine";
}


?>
<div>
<?php
    $persone = array("Dario"=>"cazzi", "paolo"=>"Anaconda");
    var_dump($persone);
    echo $persone["Dario"];
    
    foreach($persone as $c => $v)
    {
        echo "$c: $v <br>";

    }
?>
</div>
</body>
</html>