<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Bad Words</title>
</head>
<body>
    <h1>Hello PHP</h1>
    

    <?php 
    //Creare una variabile con un paragrafo di testo a vostra scelta.
    $p = "Usually when people ask how I’m doing, the real answer is I’m doing shitty, but I can’t say I’m doing shitty because I don’t even have a good reason to be doing shitty. So if I say, “I’m doing shitty,” then they say, “Why? What’s wrong?” And I have to be like, “I don’t know, all of it?” So instead, when people ask how I’m doing, I usually say, “I am doing so great.”";
    //Stampare a schermo il paragrafo e la sua lunghezza.
    echo "<p>" . $p . "</p>";
    echo 'Length of $p is - ' . strlen($p);

    #Una parola da censurare viene passata dall'utente tramite parametro GET. 
    $censorThis = $_GET["shitty"];

    #Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
    $censored_p = str_replace("shitty", "***", $p);

    echo "<p>" .$censored_p."</p>";
    echo 'Length of $censored_p is - ' . strlen($censored_p);

    ?>

</body>
</html>