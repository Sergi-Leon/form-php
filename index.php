<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Document</title>
</head>
<body>
    <h1>Formulario para enviar datos</h1>
    <form action="proc/res.proc.php" method="post">
        <input type="text" name="pokemon" placeholder="Inserte pokemon ...">
        <input type="submit">
    </form>
    <?php
    if (isset($_GET['msg'])) {
        echo '<p id="msg">Intenta con el pokemon #'.$_GET['msg'].'</p>';
    }
    ?>
</body>
</html>