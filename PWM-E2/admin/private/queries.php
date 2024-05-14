<?php
// tabla about
 function todo_de_tabla($tabla){
    global $db;
    $sql = "SELECT * FROM $tabla ORDER BY id DESC";
    return mysqli_query($db, $sql);
}

function menu_por_categoria($tipo){
    global $db;
    $sql = "SELECT * FROM menu WHERE tipo='$tipo' ORDER BY id DESC";
    return mysqli_query($db, $sql);
}



function about_por_id($idabout){
    global $db;
    $sql= "SELECT * FROM about WHERE id=$idabout";
    return mysqli_query($db, $sql); 
}

function actualizar_about( $id_about, $about_titulo, $about_url, $about_contenido){
    global $db;
    $sql = "UPDATE about SET Titulo_about='$about_titulo', Url_about='$about_url', Contenido_about='$about_contenido'WHERE id=$id_about";
    
    return mysqli_query($db, $sql);
}


function contact_por_id($id){
    global $db;
    $sql= "SELECT * FROM contact WHERE id=$id";
    return mysqli_query($db, $sql); 
}

function actualizar_contact( $id_contact, $contact_titulo,$email_contact, $name_contact, $lastname_contact, $message_contact ){
    global $db;
    $sql = "UPDATE contact SET Titulo_contact='$contact_titulo', email_contact='$email_contact', name_contact='$name_contact', lastname_contact='$lastname_contact', message_contact='$message_contact'WHERE id=$id_contact";
    
    return mysqli_query($db, $sql);
}


function menu_por_id($id){
    global $db;
    $sql= "SELECT * FROM menu WHERE id=$id";
    return mysqli_query($db, $sql); 
}

function actualizar_menu( $id, $titulo, $url, $contenido, $fecha, $tipo ){
    global $db;
    $sql = "UPDATE menu SET Titulo_menu='$titulo', Url_menu='$url', Contenido_menu='$contenido', Fecha_menu='$fecha', tipo='$tipo'WHERE id=$id";
    
    return mysqli_query($db, $sql);
}


function nuevo_alimento( $titulo, $url, $contenido, $fecha, $tipo){
    global $db;
    $sql= "INSERT INTO menu (Titulo_menu, Url_menu, Contenido_menu, Fecha_menu, tipo) VALUES('$titulo','$url','$contenido','$fecha','$tipo')";
    return mysqli_query($db, $sql); 
}

function eliminar_alimento($id){
    global $db;
    $sql = "DELETE FROM menu WHERE id=$id";
    return mysqli_query($db, $sql);
}


function inicio_por_id($id){
    global $db;
    $sql= "SELECT * FROM pinicio WHERE id=$id";
    return mysqli_query($db, $sql); 
}

function actualizar_inicio( $id, $titulo, $icono, $texto,  $carrusel1, $carrusel2){
    global $db;
    $sql = "UPDATE pinicio SET titulo='$titulo', icono='$icono', texto='$texto' WHERE id=$id";
    
    return mysqli_query($db, $sql);
}
