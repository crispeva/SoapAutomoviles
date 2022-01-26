<?php
// How to Create a SOAP Client/Server in PHP (Added Authentification) - Part 02
// https://www.youtube.com/watch?v=6V_myufS89A
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Consume a SOAP Service with PHP (JavaScript Fetch API)</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
    img{
        width: 70px;
        height: 50px;
    }
</style>
</head>
<body>
    <?php
   require_once "client.php";
   $client=new client();
$marca=$_GET['marca'];
$marcas = $client->getModelosMarcas($marca);
foreach($marcas as $marc =>$url){
    ?>
    <lu>
        <img src="images/<?=strtolower($marca)?>.png">
        <li><?=$url;?></li>
    </lu>
    <?php
}
?>

    

</body>
</html>



