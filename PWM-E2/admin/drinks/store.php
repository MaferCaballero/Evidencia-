<?php
require('../private/init.php');

//echo $_POST['categoria_nombre'];

nueva_categoria($_POST['categoria_nombre']);
db_disconnect($db);

header("Location: index.php");
exit;