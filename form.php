
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    //definire le variabili che conterranno il messaggio di errore
    //il valore verrà in un mometo socessivo
    //se l'utente non inserisce il valore

    $nomeErr= $emailErr= $genderErr= $websiteErr = "";

    //variabile che prendono i valori inseriti
    $nome= $email= $gender= $comment= $website = "";

    //function per la pulizia dati
    function test_input($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER['REQUEST_METHOD'] == "post"){
        if(empty($_POST['nome'])){
            $nomeErr = "Nome obbligatorio";
        }else{
            $name = test_input($_POST['name']);
        }
        if(empty($_POST['email'])){
            
            $emailErr = "Email obbligatorio";
        }else{
            if1()
            $email = test_input($_POST['email']);
        }
        if(empty($_POST['website'])){
            $website = "";
        }else{
            $website = test_input($_POST['website']);
        }
        if(empty($_POST['comment'])){
            $comment = "";
        }else{
            $comment = test_input($_POST['comment']);
        }
        if(empty($_POST['gender'])){
            $genderErr = "Genere obbligatorio";
        }else{
            $gender = test_input($_POST['gender']);
        }
    }
?>

    <h1>
        form campi obbliagatori
    </h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
    name:<input type="text" name="name">
    <span class="error">*<?php echo $nomeErr;?></span><br><br>
    Email:<input type="text" name="email">
    <span class="error">*<?php echo $emailErr;?></span><br><br>
    website:<input type="text" name="website">
    <span class="error">*<?php echo $websiteErr;?></span><br><br>
    Comment:<textarea name="comment" rows="5" cols="40"></textarea>
    <span class="error">*<?php echo $websiteErr;?></span><br><br>
    Gender:
    <input type="radio" name="gender" value="female">female
    <input type="radio" name="gender" value="Male">Male
    <span class="error">*<?php echo $genderErr;?></span><br><br>
    <input type="submit" value="invia">
    </form>
</body>
</html>