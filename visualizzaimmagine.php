<?php 
//variabili
$latemar =$carezza =$paganella =$folgarida ="";
//creo una funciton per ripulire i dati in input 
function test_input($data)
{
//catturo i dati arrivaati dalle form 
$data = trim($data);
//rimuove \ dai caratteri 
$data =stripcslashes($data);
//rimuovere caratteri <> ecc
$data = htmlspecialchars($data);
return $data;
}


//
if ($_SERVER ['REQUEST_METHOD']=="GET")
{
    if(isset($_GET["latemar"]))
    {
        $latemar =test_input($_GET["latemar"]);
    }
    else
    {
        $latemar= null; 
    }
    if(isset($_GET["paganella"]))
    {
        $paganella =test_input($_GET["paganella"]);
    }
    else
    {
        $paganella= null;
    }
    if(isset($_GET["carezza"]))
    {
        $carezza =test_input($_GET["carezza"]);
    }
    else
    {
        $carezza=null;
    }
    if(isset($_GET["pinzolo"]))
    {
        $Pinzolo =test_input($_GET["pinzolo"]);
    }
    else
    {
        $Pinzolo= null;
    }


}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>visualizzaimmagine</title>
</head>
<body>
    <?php 
        if (empty($folgarida))
        {
            echo "folgarida selezionato";
           
        }
        if (empty($Pinzolo))
        {
            echo"Pinzolo selezionato ";
          
        }
        if (empty($paganella))
        {
            echo "paganella selezionato";
           
        }
        

        if (empty($carezza))
        {
            echo"carezza selezionato ";
            
        }

        if (empty($paganella))
        {
            echo"paganella selezionato ";
           
        
        }
    
    
    ?>
    
</body>
</html>