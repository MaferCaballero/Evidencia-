<?php
require('../private/init.php');

actualizar_about($_POST['id'], $_POST['Titulo_about'],$_POST['Url_about'],$_POST['Contenido_about']);
db_disconnect($db);

header("Location: show.php?id=" . $_POST['id']);
exit;