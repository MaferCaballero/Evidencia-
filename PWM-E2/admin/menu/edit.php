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
                <h1 class="mb-0">Editar alimento</h1>
            </header>
        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-12 col-md-9 col-lg-6">

            <form action="update.php" method="post">
                <input type="hidden" name="id" value="<?= $menu['id'] ?>">

            
                <div class="mb-3">
                    <label for="" class="form-label">Titulo *</label>
                    <input type="text" name="Titulo_menu" class="form-control" value="<?= $menu['Titulo_menu'] ?>">
                
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Url *</label>
                    <input type="text" name="Url_menu" class="form-control" value="<?= $menu['Url_menu'] ?>">
                
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Contenido *</label>
                    <textarea name="Contenido_menu" class="form-control" rows="10"><?= $menu['Contenido_menu'] ?></textarea>
                    
                    <!-- <input type="text" name="Contenido_menu" class="form-control" value="<?= $menu['Contenido_menu'] ?>"> -->


                
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Fecha *</label>
                    <input type="date" name="Fecha_menu" class="form-control" value="<?= $menu['Fecha_menu'] ?>">
                
                </div>

                 <div class="mb-3">
                    <label for="" class="form-label">Tipo *</label>
                    <select name="tipo" class="form-select" aria-label="Tipo">
                            <option value="<?= $menu['tipo'] ?>" selected><?= $menu['tipo'] ?></option>
                            <option value="Bebida">Bebida</option>
                            <option value="Comida">Comida</option>
                            <option value="Postre">Postre</option>
                    </select>
                </div>
                <!-- <div class="mb-3">
                    <label for="" class="form-label">Tipo *</label>
                    <input type="text" name="tipo" class="form-control" value="<?= $menu['tipo'] ?>">
                
                </div> -->

                <div class="text-end">
                    <input type="submit" value="Editar menu" class="btn btn-warning">
                </div>
            </form>

        </div>
    </div>
</div>


<?php
include(SHARED_PATH . 'footer.php');