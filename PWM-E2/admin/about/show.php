<?php
require('../private/init.php');
$id = $_GET['id'];
$about = mysqli_fetch_assoc(about_por_id($id));
include(SHARED_PATH . 'header.php'); 
?>

<div class="container py-5">
    <div class="row mb-4">
        <div class="col">
            <header class="py-3 bg-danger text-center text-white">
                <h1 class="mb-0">About</h1>
            </header>
        </div>
    </div>

    <div class="row justify-content-center mb-4">
        <div class="col-12 col-md-9 col-lg-6">
            <p><b>Titulo: </b><?= $about['Titulo_about'] ?></p>
        </div>
    </div>


    <div class="row justify-content-center mb-4">
        <div class="col-12 col-md-9 col-lg-6">
            <p><b>URL: </b><?= $about['Url_about'] ?></p>
        </div>
    </div>

    <div class="row justify-content-center mb-4">
        <div class="col-12 col-md-9 col-lg-6">
            <p><b>Contenido: </b><?= $about['Contenido_about'] ?></p>
        </div>
    </div>


    <div class="row">
        <div class="col text-end">
            <a href="edit.php?id=<?= $about['id'] ?>" class="btn btn-warning me-4">Editar</a>
            <a href="../index.php" class="btn btn-success me-4">Regresar</a>
        </div>
        
           

    </div>
</div>



<?php
include(SHARED_PATH . 'footer.php');