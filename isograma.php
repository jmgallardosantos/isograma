<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

function isograma($frase){
    for ($i = 0; $i < mb_strlen($frase); $i ++){
        $pa = mb_substr($frase, $i, 1);
        if(mb_substr_count($frase, $pa) > 1){
            return false;
        }

    }
return true;
} 
$cadena = isset($_GET['cadena']) ? trim($_GET['cadena']): null;  
?>
<form action="isograma.php" method="get">
    <label for="cadena">frase a analizar</label> <br>
    <input type="text" name="cadena" id="cadena"><br>
    <button type="submit">enviar</button>

    <?php if(isset($cadena) && $cadena !== ''): ?>
      <?php  if(isograma($cadena)): ?>
            si es un isograma
        <?php  else : ?>
        no es un isograma
        <?php endif ?>
    <?php endif ?>


    



</form>
</body>
</html>