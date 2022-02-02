<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Recogida de datos</title>
</head>
<body>
    <h1>Mostrar datos del formulario</h1>
    <?php
    echo '<p>'.$_REQUEST['nombre'].'</p>';
    echo $_REQUEST['pwd'];
    ?>
</body>
</html>