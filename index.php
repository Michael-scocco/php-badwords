<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- 
    /*
    Esercizio di oggi, PHP Badwords nome repo:
    php-badwords
    Descrizione:
    Creare una variabile con un paragrafo di testo a vostra scelta. Stampare a schermo il paragrafo e la sua lunghezza.
    Una parola da censurare viene passata dall'utente tramite parametro GET. Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
    */ 
    -->
<h1>
    <?php
        $bedword = $_GET['bedword'];
        $sentence = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur maxime vel esse excepturi. Rerum sit deleniti, mollitia ex expedita ipsam?';

        $goodSentence = str_replace($badword, '***', $sentence);

        // var_dump($bedword, $sentence, $goodSentence);
        echo $goodSentence;
    ?>
</h1>

    
</body>
</html>