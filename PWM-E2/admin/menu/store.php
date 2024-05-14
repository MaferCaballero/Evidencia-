<?php
require('../private/init.php');

//echo $_POST['categoria_nombre'];

nuevo_alimento($_POST['Titulo_menu'], $_POST['Url_menu'],$_POST['Contenido_menu'],$_POST['Fecha_menu'], $_POST['tipo'] );
db_disconnect($db);

header("Location: indexm.php");
exit;