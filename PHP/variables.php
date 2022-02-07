<?php

$Saludo="Que andan los bepi?";

//Tipos de variables
$texto="Variable de texto o string";
//Defino una variable de tipo string
$varInt=123;
//Defino una variable de tipo int
$varReal=10.34;
//Defino una variable de tipo real
$varBoolean=True;
//Defino una variable de tipo booleano
$arrayTotal=array("1"=>"1", "2"=>"2","3"=>"3");
//Defino una variable de tipo array
//------------------------------------------------------------
$varStringDos= "Variable de texto o string";
$varStringDos.=" Y ahora tengo mas texto";
// el .= sirve para seguir el de arriba, para unirlos

?>

<!DOCTYPE>
<html>
    <head>
        <title> Primer paso </title>
</head>
<body>
        <h1><?php var_dump($texto);?></h1>
        <h1><?php var_dump($varInt);?></h1>
        <h1><?php var_dump($varReal);?></h1>
        <h1><?php var_dump($varBoolean);?></h1>
        <h1><?php var_dump($arrayTotal);?></h1>

<h1> <?=$varStringDos?> </h1>
</body>
</html>
