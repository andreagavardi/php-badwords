<?php
    $stringa = " ciao, oggi c'è il sole, perchè oggi non piove ma c'è il sole, siccome oggi c'è il sole vuol dire che non piove";
    var_dump($stringa)
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-BADWORDS</title>
</head>
<body>
    <h1>PHP</h1>
    <h3>
        <?php echo $stringa; ?> <br>
        Lunghezza stringa:
        <?php echo strlen($stringa); ?>
    </h3>
</body>
</html>


<!-- Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta. Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET. Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->