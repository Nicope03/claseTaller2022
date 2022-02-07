<?php

$Saludo="Que andan los bepi?";


?>

<!DOCTYPE>
<html>
    <head>
        <title> Primer paso </title>
</head>
<body>
        <h1><?php echo($Saludo);?></h1>
        <h1><?=$Saludo?></h1>
        <h1><?php print_r($Saludo);?></h1>
        <h1><?php var_dump($Saludo);?></h1>
</body>
</html>
