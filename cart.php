<!DOCTYPE html>
<html>
    
  <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <link href="CSS/styles.css" rel="stylesheet" type="text/css" />

        <style>
        h1{
                font-size: 1.3em;
            }
        </style>
    </head>
</html>
<?php

session_start();

echo "Your items:  <br/>";
$cart = $_POST['items'];
for($i=0; $i < count($cart); $i++){
    echo $cart[$i] .  "<br/>";
}
?>