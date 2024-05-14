<?php
require('../private/init.php');

actualizar_categoria($_POST['id'], $_POST['categoria_nombre']);
db_disconnect($db);

header("Location: show.php?id=" . $_POST['id']);
exit;