<?php
require('../private/init.php');

//echo $_POST['categoria_nombre'];

eliminar_categoria($_GET['id']);

db_disconnect($db);

header("Location: index.php");
exit;