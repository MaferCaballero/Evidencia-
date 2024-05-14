<?php
require('../private/init.php');
$id = $_GET['id'];
$menu = mysqli_fetch_assoc(menu_por_id($id));
include(SHARED_PATH . 'header.php'); 
?>

<div class="container py-5">
    <div class="row mb-4">
        <div class="col">
            <header class="py-3 bg-danger text-center text-white">
                <h1 class="mb-0">Menu: <?= $menu['id'] ?></h1>
            </header>
        </div>
    </div>
    
    <div class="row justify-content-center mb-4">
        <div class="col-12 col-md-9 col-lg-6">
            <p><b>Titulo </b><?= $menu['Titulo_menu'] ?></p>
        </div>
    </div>

    <div class="row justify-content-center mb-4">
        <div class="col-12 col-md-9 col-lg-6">
            <p><b>URL </b><?= $menu['Url_menu'] ?></p>
        </div>
    </div>

    <div class="row justify-content-center mb-4">
        <div class="col-12 col-md-9 col-lg-6">
            <p><b>Contenido </b><?= $menu['Contenido_menu'] ?></p>
        </div>
    </div>

    <div class="row justify-content-center mb-4">
        <div class="col-12 col-md-9 col-lg-6">
            <p><b>Fecha </b><?= $menu['Fecha_menu'] ?></p>
        </div>
    </div>

    <div class="row justify-content-center mb-4">
        <div class="col-12 col-md-9 col-lg-6">
            <p><b>Tipo </b><?= $menu['tipo'] ?></p>
        </div>
    </div>

    <div class="row">
        <div class="col text-end">
            <a href="edit.php?id=<?= $menu['id'] ?>" class="btn btn-warning me-4">Editar</a>
            <a href="indexm.php" class="btn btn-success me-4">Regresar</a>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Eliminar
            </button>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <p>¿Estás seguro que quieres eliminarla?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>

                <!-- <button type="button" class="btn btn-danger">Eliminar</button> -->
                <a href="delete.php?id=<?= $menu['id'] ?>" class="btn btn-danger">Eliminar</a>
            </div>
        </div>
    </div>
</div>


<?php
include(SHARED_PATH . 'footer.php');