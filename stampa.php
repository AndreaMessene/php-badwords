<?php

    $paragrafo= $_GET['paragrafo'];
    $censura= $_GET['censura'];
    $paragrafoCensurato= str_replace($censura, '****', $paragrafo);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stampa</title>
</head>
<body>
    <div>
        <?php echo $paragrafo ?>
        <div>----------------</div>
        <?php echo "il paragrafo è lungo:  " . strlen($paragrafo) ?>
        <div>----------------</div>


    </div>
    

    <div>
    <?php echo $paragrafoCensurato ?>
    <div>-----------</div>
    <?php echo "il paragrafo censurato è lungo: " . strlen($paragrafoCensurato) ?>

    </div>



    
</body>
</html> 