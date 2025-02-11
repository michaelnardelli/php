<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio Quattro</title>
</head>
<body>
    <h1>Esercizio Quattro</h1>

    <?php
$willy = array(
    'Italia' => 'Roma',
    'Francia' => 'La Spezia',
    'Sud' => 'Napoli',
    'Olanda' => 'Droghe'
);

ksort($willy);

echo "<table border='1'>";
echo "<tr><th>Stato</th><th>Città</th></tr>";

foreach ($willy as $country => $city) {
    echo "<tr><td>" . $country . "</td><td>" . $city . "</td></tr>";
}

echo "</table>";
?>
<h1>Esercizio Sei</h1>
<?php
$vecchi = array(
    'Franca' => 99,
    'Giacomo' => 67,
    'Errì' => 12,
    'Olanda' => 18
);

asort($vecchi);

$nomi = array_keys($vecchi); 
$anni = array_values($vecchi); 

echo "<h2>Array ordinato per anni (valori):</h2>";
echo "<table border='1'>";
echo "<tr><th>Nome</th><th>Anni</th></tr>";

for ($i = 0; $i < count($nomi); $i++) {
    echo "<tr><td>" . $nomi[$i] . "</td><td>" . $anni[$i] . "</td></tr>";
}
echo "</table>";

ksort($vecchi);

echo "<h2>Array ordinato per nomi (chiavi):</h2>";
echo "<table border='1'>";
echo "<tr><th>Nome</th><th>Anni</th></tr>";

foreach ($vecchi as $nome => $anni) {
    echo "<tr><td>" . $nome . "</td><td>" . $anni . "</td></tr>";
}
echo "</table>";
?>

</body>
</html>