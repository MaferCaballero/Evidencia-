<?php
require('private/init.php');
include(SHARED_PATH . 'header.php'); 
?>

<div class="container py-5">
    <div class="row mb-4">
        <div class="col">
            <header class="py-3 bg-danger text-center text-white">
                <h1 class="mb-0">Tandoori</h1>
            </header>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <a href="about/show.php?id=1" class="btn btn-primary">Ver about</a>
        </div>
        
        <div class="col">
            <a href="contact/show.php?id=1" class="btn btn-secondary">Ver contact</a>
        </div>

        <!-- <div class="col">
            <a href="desserts/indexde.php" class="btn btn-secondary">Ver desserts</a>
        </div>

        <div class="col">
            <a href="drinks/indexdr.php" class="btn btn-secondary">Ver drinks</a>
        </div> -->

        <div class="col">
            <a href="menu/indexm.php" class="btn btn-warning">Ver
                menu</a>
        </div>
        <!-- <div class="col">
            <a href="inicio/show.php" class="btn btn-secondary">Ver pagina de inicio</a>
        </div> -->
    </div>
    </div>
</div>

<?php
include('shared/footer.php');


    
