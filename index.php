<?php

    $password= $_GET['password']


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="stampa.php" method="GET">

        <div class="">
            <div>
                <div><label for="">inserisci testo:</label></div>
                <textarea placeholder="inserisci testo" cols="30" rows="10" name="paragrafo"></textarea>   
            </div> 

            <div>
                <label for="">cosa vuoi censurare?</label>
                <input type="text" name="censura">
            </div>

            <button type="submit">Censura</button>
        </div>
    </form>

    
</body>
</html> 