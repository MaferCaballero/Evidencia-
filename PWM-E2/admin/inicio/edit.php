<?php
require('../private/init.php');
$idinicio = $_GET['id'];
$idinicio = mysqli_fetch_assoc(inicio_por_id($idinicio));
include(SHARED_PATH . 'header.php'); 
?>

<div class="container py-5">
    <div class="row mb-4">
        <div class="col">
            <header class="py-3 bg-danger text-center text-white">
                <h1 class="mb-0">Editar pagina de inicio</h1>
            </header>
        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-12 col-md-9 col-lg-6">

            <form action="update.php" method="post">
                <input type="hidden" name="id" value="<?= $idinicio['id'] ?>">

            
                <div class="mb-3">
                    <label for="" class="form-label">Titulo *</label>
                    <input type="text" name="titulo" class="form-control" value="<?= $idinicio['titulo'] ?>">
                
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Logo *</label>
                    <input type="text" name="icono" class="form-control" value="<?= $idinicio['icono'] ?>">
                
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Contenido *</label>
                    <input type="text" name="texto" class="form-control" value="<?= $idinicio['texto'] ?>">
                    
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Carrusel1 *</label>
                    <input type="text" name="carrusel1" class="form-control" value="<?= $idinicio['carrusel1'] ?>">
                    
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Carrusel2 *</label>
                    <input type="text" name="carrusel2" class="form-control" value="<?= $idinicio['carrusel2'] ?>">
                    
                </div>


                <div class="text-end">
                    <input type="submit" value="Editar inicio" class="btn btn-warning">
                </div>
            </form>

        </div>
    </div>
</div>


<?php
include(SHARED_PATH . 'footer.php');