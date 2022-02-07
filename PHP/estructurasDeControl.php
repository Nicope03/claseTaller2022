<?php

//Estructuras de control
/*
if (condicion){
    //Sentencia de codigo
}

*/
$varBolean=FALSE;
$varNombre="Roberto";

if($varBolean){
    //Se accede aqui si es true (en este caso varBolean lo definimos como false)
    $varNombre.=$varNombre."es un nombre";
}
else{
    //Entonces si es false accede al else
    $varNombre= $varNombre." no es un nombre";
}
if($varNombre =="Roberto"){
    $varNombre=$varNombre;
}

//Ejemplo con If elseif
$Salario= 45000;
if($Salario <25000){
    $respuesta="No pago irpf";


}elseif($Salario > 25000 && $Salario<35000){
    $respuesta= "pago 8% irpf";
}
elseif($Salario > 35000 && $Salario<45000){
        $respuesta="pago 15% de irpf";
    }   
elseif($Salario>45000){
    $respuesta= "Te odio Astori";
}
else{
    $respuesta= "Uh sape";
}


//Switch

$varHelados= "MentaG";
$varMG="";
switch($varHelados){
    case "MentaG";
    $varMG= "Pero mas bien lokita";
    break;
    case "Limon";
    $varMG="Meh";
    break;
    case "DulceDeLeite";
    $varMG="sabe";
    break;
    default:
        $varMG="Que decis?";
        break;
}
?>

<!DOCTYPE>
<html>
    <head>
        <title> Estructuras de control </title>
</head>
<body>
        <h1><?=$varNombre;?></h1>
        <h1><?=$respuesta;?></h1>
        <h1><?=$varMG;?></h1>
</body>
</html>