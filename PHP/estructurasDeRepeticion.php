<?php

$condicion=True;





?>

<!DOCTYPE>
<html>
    <head>
        <title> Estructuras de Repeticion </title>
</head>
<body>
<?php
$i=0;
while($condicion){
//Esto se repite
echo("<h1>Hola me repito siempre:::".$i."</h1>");
$i= $i + 1;
if ($i >=5){
    $condicion=False;
}
?>
</body>

<?php

        for($i=0; $i <= 5; $i++)
        echo "El numero vale:" .$i. "<br/>";
?>
<?php
do{

    $x= $x + 2;
    if ($x%2==0){
        echo "<h1> Soy numero::"
    }
}
?>
        </html>
