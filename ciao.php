<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="ciao.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scemo chi legge.</title>
</head>
<body>
    <h1>Php tutorial.</h1>
    <?php/*
  echo "<b>I just lost my dawg... and the chill dude take my diiii....</b>";
        
  $e = 7;
  $c = 7; 
  $risultato = $e+$c;
  echo "ecco il puzzo".$risultato;
  echo $fresco = $e+$c;
  */
  ?>
  <br>
<h1>Funzioni in php.</h1>

<?php
/*
  $e = 7;
  $c = 7;  
    function sega($n1,$n2){
        return $n1+$n2;
    }
    echo sega($e,$c);
    ?>
    <br>
    <?php
    $frutta = array("Matite","penne","cazzi");
    echo $frutta[2];
    echo"l'array contiene<br>";
    echo var_dump($frutta);
    echo "<br>";
    
    for($i = 0;$i<2;$i++)
    { 
      echo "$frutta[$i]<br>";
    }
    
    if(sizeof($frutta) < 4)
    {
      echo"cagato nel puzzacchione?<br>";
    }

    echo"Array puzzato";
    for($i = 0;$i < count($frutta);$i++)
    { 
      echo "<li>".$frutta[$i]."</li>";
    }
    unset($frutta[2]);
    
echo"Array post puzzato";
    for($i = 0;$i < sizeof($frutta);$i++)
    { 
      echo "<li>".$frutta[$i]."</li>";
    }
$frutta= array_values($frutta);

array_splice($frutta, 1,2);
echo"Array post puzzato";
    for($i = 0;$i < sizeof($frutta);$i++)
    { 
      echo "<li>".$frutta[$i]."</li>";
    }
    $array = array("palle",7,"moccias", ["culo","mele"]);
    echo var_dump($array);
    */
    ?>
<div id="chatbox">
  <?php
  /*
    $file_messaggi = 'chat.txt';

    if (file_exists($file_messaggi) && is_readable($file_messaggi)) {
        $handle = fopen($file_messaggi, 'r');
        while (!feof($handle)) {
            $riga = fgets($handle);
            echo "<p>$riga</p>";
        }
        fclose($handle);
    } else {
        echo "<p>Impossibile caricare i messaggi. Controllare il file.</p>";
    }
    ?>
</div>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="message">
    <input type="submit" value="Invia">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $messaggio = $_POST['message'];

    $handle = fopen($file_messaggi, 'a');
    fwrite($handle, $messaggio . "\n");
    fclose($handle);
}
?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $messaggio = $_POST['message'];

    $handle = fopen($file_messaggi, 'a');
    fwrite($handle, $messaggio . "\n");
    fclose($handle);
}
*/
?>
<footer>

  <img src="./immagine.jpeg" alt="immagine">
  <img src="chill.jpeg" alt="chillDude">
</footer>
    </body>
</html>