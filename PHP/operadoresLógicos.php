<?php

//Defino variable A booleana

$varBooleanA= True;
//Defino variable C booleana
$varBooleanB=False;
//Defino variable C booleana
$varBooleanC=True;
//-----------------------------------------------------------------

$varCasoUno= $varBooleanA && $varBooleanB;

$varCasoDos= $varBooleanA && $varBooleanC;

$varCasoTres= $varBooleanB && $varBooleanB;
//-----------------------------------------------------------------

$varCasoCuatro= $varBooleanA || $varBooleanB;

$varCasoCinco= $varBooleanA || $varBooleanC;

$varCasoSeis= $varBooleanB || $varBooleanB;
//-----------------------------------------------------------------
$varCasoSiete = $varBooleanB xor $varBooleanB;

$varCasoOcho= $varBooleanB xor $varBooleanB;

$varCasoNueve= $varBooleanB xor $varBooleanB;
//-----------------------------------------------------------------
$varCasoDiez=!$varBooleanA;

$varCasoOnce=!$varBooleanB;
//-----------------------------------------------------------------
$varA=5;
$varB=9;
$varC=5;
$varD="5";
$varCasoMultiple= !(($varBooleanA || $varBooleanB) && ($varA > $varC));







?>

<!DOCTYPE>
<html>
    <head>
        <title> Operadores lógicos </title>
</head>
<body>
        <h1>$varBooleanA && $varBooleanB; <?php var_dump($varCasoUno) ?> </h1>
        <h1>$varBooleanA && $varBooleanC; <?php var_dump($varCasoDos) ?> </h1>
        <h1>$varBooleanB && $varBooleanB; <?php var_dump($varCasoTres) ?> </h1>
        <hr>
        <h1>$varBooleanA || $varBooleanB; <?php var_dump($varCasoCuatro) ?> </h1>
        <h1>$varBooleanA || $varBooleanC; <?php var_dump($varCasoCinco) ?> </h1>
        <h1>$varBooleanB || $varBooleanB; <?php var_dump($varCasoSeis) ?> </h1>
        <hr>
        <h1>$varBooleanA xor $varBooleanB; <?php var_dump($varCasoSiete) ?> </h1>
        <h1>$varBooleanA xor $varBooleanC; <?php var_dump($varCasoOcho) ?> </h1>
        <h1>$varBooleanB xor $varBooleanB; <?php var_dump($varCasoNueve) ?> </h1>
        <h1>$varBooleanB xor $varBooleanB; <?php var_dump($varCasoNueve) ?> </h1>
        <hr>
        <h1>$!$varBooleanA ; <?php var_dump($varCasoDiez) ?> </h1>
        <h1>$!varBooleanB; <?php var_dump($varCasoOnce) ?> </h1>
        <hr>
        <h1>$varCasoMultiple; <?php var_dump($varCasoMultiple) ?> </h1>
        
        


</body>
</html>
