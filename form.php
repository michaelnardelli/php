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

    $nameErr= $emailErr= $genderErr= $websiteErr = "";

    //variabile che prendono i valori inseriti
    $name= $email= $gender= $comment= $website = "";

    //function per la pulizia dati
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data); // Corrected function name
        $data = htmlspecialchars($data);
        return $data;
    }
   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["name"])) {
        $nameErr = "Name is required";
      } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
          $nameErr = "Only letters and white space allowed";
          echo "<script>alert('Only letters and white space allowed');</script>";
        }
      }
  
      if (empty($_POST["email"])) {
        $emailErr = "Email is required";
      } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format";
          echo "<script>alert('Invalid email format');</script>";
        }
      }

      if (empty($_POST["website"])) {
        $website = "";
      } else {
        $website = test_input($_POST["website"]);
        // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
          $websiteErr = "Invalid URL";
        }
      }
      
      if (empty($_POST["comment"])) {
        $comment = "";
      } else {
        $comment = test_input($_POST["comment"]);
      }
      
      if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
      } else {
        $gender = test_input($_POST["gender"]);
      }
    }
    
?>

    <h1>
        form campi obbliagatori
    </h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
    Name:<input type="text" name="name">
    <span class="error">*<?php echo $nameErr;?></span><br><br>
    Email:<input type="text" name="email">
    <span class="error">*<?php echo $emailErr;?></span><br><br>
    website:<input type="text" name="website">
    <span class="error">*<?php echo $websiteErr;?></span><br><br>
    Comment:<textarea name="comment" rows="5" cols="40"></textarea>
    <span class="error"></span><br><br>
    Gender:
    <input type="radio" name="gender" value="female">female
    <input type="radio" name="gender" value="Male">Male
    <span class="error">*<?php echo $genderErr;?></span><br><br>
    <input type="submit" value="invia">
    </form>
</body>
</html>
