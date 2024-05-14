<?php
require('../private/init.php');

actualizar_menu($_POST['id'], $_POST['Titulo_menu'], $_POST['Url_menu'], $_POST['Contenido_menu'],  $_POST['Fecha_menu'],  $_POST['tipo'] );
db_disconnect($db);

header("Location: show.php?id=" . $_POST['id']);
exit;