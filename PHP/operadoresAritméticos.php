<?php


//Ejemplos de nomenclatura
$holaMeLlamoNicolás;
$hola_me_llamo_Nicolas;
//Usar a preferencia. Consejo no usar numeros en los name de las variables. Tampoco usar varUno varDos, pq sino no nos acrodamos a q hacen referencia.

//Defino variable A numérica
$varNumA="7";
//Defino variable B numérica
$varNumB="5";

$resultadoSuma= ($varNumA + $varNumB);
$resultadoSumaDos= 7 + 5;
$resultadoSumaTres= $varNumA + 6;


?>

<!DOCTYPE>
<html>
    <head>
        <title> Primer paso </title>
</head>
<body>

    <h1>Resultado uno<?=$resultadoSuma ?> </h1>
    <h1>Resultado dos<?=$resultadoSumaDos ?> </h1>
    <h1>Resultado tres<?=$resultadoSumaTres ?> </h1>
</body>
</html>