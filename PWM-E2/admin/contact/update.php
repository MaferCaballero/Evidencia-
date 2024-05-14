<?php
require('../private/init.php');

actualizar_contact($_POST['id'], $_POST['Titulo_contact'],$_POST['email_contact'],$_POST['name_contact'],$_POST['lastname_contact'],$_POST['message_contact']);
db_disconnect($db);

header("Location: show.php?id=" . $_POST['id']);
exit;