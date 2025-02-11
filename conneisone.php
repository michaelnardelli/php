<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        ciao
    </h1>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "root";

    $conn = mysqli_connect($servername, $username, $password);

    if (!$conn) {
        die("connessione fallita: " . mysqli_connect_error());
    }
    echo "connessione avvenuta con successo";
    $sql = "CREATE DATABASE mioDatabase";
    if (mysqli_query($conn, $sql)) {    
        echo "database creato";
    }
    else {
        echo "Errore: " . mysqli_error($conn);
    }

    ?>
</body>
</html>
