<?php
require('../private/init.php');

actualizar_inicio($_POST['id'], $_POST['titulo'],$_POST['icono'],$_POST['texto'],$_POST['carrusel1'],$_POST['carrusel2']);
db_disconnect($db);

header("Location: show.php?id=" . $_POST['id']);
exit;