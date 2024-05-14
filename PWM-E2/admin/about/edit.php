<?php
require('../private/init.php');
$idabout = $_GET['id'];
$idabout = mysqli_fetch_assoc(about_por_id($idabout));
include(SHARED_PATH . 'header.php'); 
?>

<div class="container py-5">
    <div class="row mb-4">
        <div class="col">
            <header class="py-3 bg-danger text-center text-white">
                <h1 class="mb-0">Editar about</h1>
            </header>
        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-12 col-md-9 col-lg-6">

            <form action="update.php" method="post">
                <input type="hidden" name="id" value="<?= $idabout['id'] ?>">

            
                <div class="mb-3">
                    <label for="" class="form-label">Titulo *</label>
                    <input type="text" name="Titulo_about" class="form-control" value="<?= $idabout['Titulo_about'] ?>">
                
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Url *</label>
                    <input type="text" name="Url_about" class="form-control" value="<?= $idabout['Url_about'] ?>">
                
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Contenido *</label>
                    <!-- <input type="text" name="Contenido_about" class="form-control" value="<?= $idabout['Contenido_about'] ?>"> -->
                    <textarea name="Contenido_about" class="form-control" rows="10"><?= $idabout['Contenido_about'] ?></textarea>
                
                </div>

                <div class="text-end">
                    <input type="submit" value="Editar about" class="btn btn-warning">
                </div>
            </form>

        </div>
    </div>
</div>


<?php
include(SHARED_PATH . 'footer.php');