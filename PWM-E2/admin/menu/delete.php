<?php
require('../private/init.php');

//echo $_POST['categoria_nombre'];

eliminar_alimento($_GET['id']);

db_disconnect($db);

header("Location: indexm.php");
exit;