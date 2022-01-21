<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php  
        $parola = $_GET['parola'];
        $paragrafo = "Sono il paragrafo da censurare"
    ?>
    <!-- <h1>ciao <?php echo $parola; ?> </h1> -->
    <h2><?php echo $paragrafo; ?></h2>
    <h2>Sono lungo <?php echo strlen($paragrafo); ?></h2>

    <h3>--------------------------</h3>

    <h2> <?php echo $censurato = str_replace($parola, '***', $paragrafo) ?> </h2>
    <h2> Sono lungo <?php echo strlen($censurato) ?> caratteri </h2>
</body>
</html>