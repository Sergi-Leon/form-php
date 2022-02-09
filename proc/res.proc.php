<?php
// echo $_POST['pokemon'];
if (isset($_POST['pokemon'])) {
    if (strtolower($_POST['pokemon'])=='pikachu') {
        session_start();
        $_SESSION['pantalla1']='check';
        header('Location: ../view/pantalla1.php');
    } else {
        header('Location: ../index.php?msg=25');
    }
} else {
    if ($_POST['pokemon2']=='charmander') {
        session_start();
        $_SESSION['pantalla2']='check';
        header('Location: ../view/pantalla2.php');
    } else {
        header('Location: ../view/pantalla1.php?msg=04');
    }
}

?>