<?php

$varA=5;
$varB=9;
$varC=5;
$varD="5";

//Voy a compararar si las var son iguales. si tiene "" es q es texto, no es lo mismo un 1 q un "1"
$varCasoUno= $varA ==$varB;
//Voy a comparar si las var son iguales
$varCasoDos= $varA==$varC;
//Voy a comparar si las variables son idénticas

$varCasoTres= $varA===$varC;

$varCasoCuatro= $varA===$varD;

$varCasoCinco= $varA=$varC;
$error=False;

//Voy a comparar si las variables son idénticas

$varCasoSeis= $varA !=$varC;

$varCasoSiete=$varA!==$varD;

//Voy a comparar si las variables son idénticas

$varCasoOcho= $varA > $varC;
$varCasoNueve=  $varA < $varD;
$varCasoDiez= $varA < $varB;

?>

<!DOCTYPE>
<html>
    <head>
        <title> Operadores de Comparacion </title>
</head>
<body>
<h1> $varA=: <?php var_dump($varA); ?> </h1>
<h1> $varB=: <?php var_dump($varB); ?> </h1>
<h1> $varC=: <?php var_dump($varC); ?> </h1>
<h1> $varD=: <?php var_dump($varD); ?> </h1>
<hr>
<h1> $varA == $varB<?php var_dump("$varCasoUno") ?> </h1>
<h1> $varA == $varC<?php var_dump("$varCasoDos") ?> </h1>

<hr>
<h1> $varA == $varC<?php var_dump("$varCasoTres") ?> </h1>
<h1> $varA == $varD<?php var_dump("$varCasoCuatro") ?> </h1>
<h1> $varA == $varD<?php var_dump("$varCasoCinco") ?> </h1>
<hr>
<h1> Error: <?php print($error); ?> </h1>
<h1> Error: <?php var_dump($error); ?> </h1>
<hr>
<h1>$varA > $varC: <?php var_dump($varCasoOcho); ?> </h1>
<h1>$varA < $varD: <?php var_dump($varCasoNueve); ?> </h1>
<h1>$varA < $varB: <?php var_dump($varCasoDiez); ?> </h1>
</body>
</html>