**Scemo chi legge .-.**
# Strofe di supporto.
Preso dal panico (non piangere)
Fermati un attimo (posso farcela)
Perché se vai più giù (più giù)
Forse non torni più (forse non torni più)
Cerchi di uccidere (nemici)
Quello che hai dentro te (non lo dici)
Ma fare come fai (come fai)
Poi te ne pentirai (te ne pentirai)

# Informazioni generali su PHP.
PHP è un linguaggio di script che possiamo settare dentro HTML, e viene elaborato dal server. La maggior parte del codice viene da C e dallo scripting in bash o java. Sto linguaggio di merda serve per scrivere script che vengono gestite lato server e rendere più dinamiche e veloce la creazione di pagine.
## Stampare variabili.
*echo* per stampare.
variabili: 
    - Non specifichiamo il tipo di dato
    - E le variabili iniziano tutte con il simbolo '$'
    - Non posson inziare con un numero
    - Le variabili possono contenere solo (A-Z; a-z; 0-9; '_')
esempio:
```
$y = "culo"; //ok
$numero = 7; //ok
$3 = 3; //ma sei scemo

```

Per concatenare una stringa alla variabile usciamo '.'
```  echo "ecco il puzzo".$risultato;```

## Funzioni in Php.
Per definire una funzione scriviamo:
`function(argomenti){
    retur(palle)
}`
per richiamare invece:
```
echo sega($e,$c);
```
totale:
```
<?php
  $e = 7;
  $c = 7; 
    function sega($n1,$n2){
        return $n1+$n2;
    }
    echo sega($e,$c);
    ?>
```
## Array in php.
Per definire un array noi usiamo:
```
    $frutta = array("Matite","penne","cazzi");
```
Per stampare si può usare un indice o un ciclo:
```
    echo $frutta[2];
    echo"l'array contiene<br>"
    echo var_dump($frutta) //questo stampa tutto l'array ma in una forma sbagliata. solo contenuto
```
l'array puo contenere variabili di tipi diversi.
## Array innestati.
Per innestare un array con un'altro, dobbiamo mettere le`[]` come elemento dell'array e successivamente mettiamo nele quadre le nuove valute dell'array.
```
    $array = array("palle",7,"moccias", ["culo","mele"]);
    echo var_dump($array);

```
## Array associativi.
Come in altri linguagig ci sono i dizionari qua abbiamo gli array associativi.
ecco come si fanno:
```
    $Persone = array("Dario"=>"cazzi", "paolo"=>"Anaconda");
    var_dump($Persone);
    echo$Persone["Dario"];
    
    foreach($Persona as $c => $v)
    {
        echo "$c: $v <br>";

    }
```
### Come eliminare un elemento.
Per eliminare un elemento dell'array usiamo la funzione `unset($array[i])`
Dopo l'unset dobbiamo reallineare il vettore con `array_value($array)`
```
echo"Array post puzzato";
    for($i = 0;$i <= sizeof($frutta);$i++)
    { 
      echo "<li>".$frutta[$i]."</li>";
    }
$frutta= array_values($frutta);

```
**Un altro modo per eliminare elementi è** `array_splice`($array,Indice del primo eliminato, indice del seconodo eliminato.)
## If in php.
La funzione if è uguale a tutto.
### mVariabile null.
Per vedere se una variabile è null, usiamo `if (isset($cibo[1][$i]))`

## Cicli in php 
### For
Per fare un ciclo for in PHP è come negli altri linguagigi
```
    for($i = 0;$i<=2;$i++)
    { 
      echo "$frutta[$i]<br>";
    }
    ?>
```
#### In caso di errore.
Ricordarsi sempre il `$` prima di ogni **variabile**

### While.
Come negli altri linguaggi il ciclo while compie unazione finche la sua restrizione è vera:
```
    $palle = 0;
    while($palle <= 10)
    {
      echo "<br>Palle";
      $palle++;
    }
    ?>
```
## Segmentazione del Codice PHP.
In php possiamo segmentare il codice cosi da mixare il codice con l'html come in questo caso:
```
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

```
## Chat box in php.
Per far una chatbox creiamo il form in html e possiamo gestirlo con php.
Per creare il form facciamo:
```
    <form method="post" action="">
        <input type="text" name="message">
        <input type="submit" value="Invia">
    </form>
```
Mentre le nostre variabili possiamo gestirle in questo modo:
```
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
```
In questo caso prendiamo le variabili che scriviamo nel form e le memorizziamo nel file chat.
Funzioni usate:
```
fopen(porcodio); //per aprire il file, possiamo aprire il file sia in modalità read 'r', che in modalità append 'a'.
!feof(nelCuloTiArriva); //Per tenere il file aperto fino alla sua fine.
fgets(bucco); //Per leggere l'ultima riga del file
fclose(pinos) //Per chiudere il file.

```
## Segmentazione del Codice PHP.
generati auto.
Appunti sul Codice PHP: Ordinamento degli Array
1. Ordinamento degli Array
In PHP, gli array possono essere ordinati in base ai valori o alle chiavi.
Ordinamento per valori: Usa la funzione asort().
Ordinamento per chiavi: Usa la funzione ksort().
2. Ordinamento per Valori (Anni)
Quando si usa asort(), l'array viene ordinato in base ai valori (in questo caso gli anni) mantenendo le chiavi (i nomi).
php
Copia codice
asort($vecchi);
Esempio:
Input: array('franca' => 99, 'Giacomo' => 67, 'Errì' => 12, 'Olanda' => 18)
Output ordinato per valori (anni): array('Errì' => 12, 'Olanda' => 18, 'Giacomo' => 67, 'franca' => 99)
3. Ordinamento per Chiavi (Nomi)
Quando si usa ksort(), l'array viene ordinato in base alle chiavi (i nomi) mantenendo i valori (gli anni).
php
Copia codice
ksort($vecchi);
Esempio:
Input: array('franca' => 99, 'Giacomo' => 67, 'Errì' => 12, 'Olanda' => 18)
Output ordinato per chiavi (nomi): array('Errì' => 12, 'Franca' => 99, 'Giacomo' => 67, 'Olanda' => 18)
4. Creazione di Tabelle HTML
Per visualizzare i dati in una tabella HTML, si può iterare sull'array e stampare ogni chiave e valore.
Esempio di struttura della tabella:
php
Copia codice
echo "<table border='1'>";
echo "<tr><th>Nome</th><th>Anni</th></tr>";
foreach ($vecchi as $nome => $anni) {
    echo "<tr><td>" . $nome . "</td><td>" . $anni . "</td></tr>";
}
echo "</table>";
5. Creazione di Due Tabelle
Nel codice proposto, vengono create due tabelle:
La prima tabella è ordinata per anni (valori) usando asort().
La seconda tabella è ordinata per nomi (chiavi) usando ksort().
6. Uso di array_keys() e array_values()
Per separare nomi e anni in due array distinti, si usano le funzioni array_keys() e array_values():
array_keys($vecchi) estrae tutte le chiavi (nomi).
array_values($vecchi) estrae tutti i valori (anni).
Esempio Completo
php
Copia codice
<h1>Esercizio Sei</h1>
<?php
$vecchi = array(
    'franca' => 99,
    'Giacomo' => 67,
    'Errì' => 12,
    'Olanda' => 18
);

// Ordinamento per valori (anni)
asort($vecchi);
$nomi = array_keys($vecchi); // ottieni le chiavi (nomi)
$anni = array_values($vecchi); // ottieni i valori (anni)

echo "<h2>Array ordinato per anni (valori):</h2>";
echo "<table border='1'>";
echo "<tr><th>Nome</th><th>Anni</th></tr>";
for ($i = 0; $i < count($nomi); $i++) {
    echo "<tr><td>" . $nomi[$i] . "</td><td>" . $anni[$i] . "</td></tr>";
}
echo "</table>";

// Ordinamento per chiavi (nomi)
ksort($vecchi);

echo "<h2>Array ordinato per nomi (chiavi):</h2>";
echo "<table border='1'>";
echo "<tr><th>Nome</th><th>Anni</th></tr>";
foreach ($vecchi as $nome => $anni) {
    echo "<tr><td>" . $nome . "</td><td>" . $anni . "</td></tr>";
}
echo "</table>";
?>
Riepilogo
asort(): Ordina per valori (anni), mantenendo le chiavi (nomi).
ksort(): Ordina per chiavi (nomi), mantenendo i valori (anni).
array_keys() e array_values() sono utili per separare le chiavi e i valori in due array distinti.
Le tabelle HTML sono utili per visualizzare i dati in modo ordinato e leggibile.
Spero che questi appunti ti siano utili! Se hai bisogno di ulteriori chiarimenti, fammi sapere!
## Variabili GLOBALI.
Le variabili globali possono essere richiamate da ogni ambito, e le scriviamo in maiuscolo per comodità.
```
phpsborraetc etc etc.
$x = "pino";

function pergolo(){
    echo $GLOBALS['x'];
}
```
$GLOBALS è un array associativo che memorizza tutte le variabili nel nostro codice.
oppure:
```
phpsborraetc etc etc.
global $x = "pino";

function pergolo(){
    echo global $x;
}
```
A livello di sicurezza sono identiche.(quindi una merda)

Altre variabili globali sono $_SERVER che anch'esso è un array associativo ma in questo viene inserita la chiave.

$_REQUEST




































# Sezione bestemmie
Dio cane bastardo attiva quel merda di internet dio boia che devo fare i commit madonna puttana.
Dio madonna se devo morire.
**SUCCHIATEMI ANCORA IL CAZZO**.
Mi annoio aiuto a a a a a a a a a a a a a a a a a a a.
Another day another victory for the OG.
