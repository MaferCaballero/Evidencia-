<?php
require('../private/init.php');

$menu = todo_de_tabla('menu');

include(SHARED_PATH . 'header.php'); 
?>

<div class="container py-5">
    <div class="row mb-4">
        <div class="col">
            <header class="py-3 bg-danger text-center text-white">
                <h1 class="mb-0">Menu</h1>
            </header>
        </div>
    </div>

    <div class="row">
        <div class="col text-end">
            <a href="create.php" class="btn btn-success">Crear</a>
            <a href="../index.php" class="btn btn-success me-4">Regresar</a>
        </div>
    </div>

    <div class="row">
        <div class="col">

            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Titulo</th>
                        <th>Url</th>
                        <th>Contenido</th>
                        <th>Fecha</th>
                        <th>Tipo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>

                    <?php while( $row = $menu->fetch_assoc() ){ ?>
                        <tr>
                            <td><?= $row['id'] ?></td>
                            <td><?= $row['Titulo_menu'] ?></td>
                            <td><?= $row['Url_menu'] ?></td>
                            <td><?= $row['Contenido_menu'] ?></td>
                            <td><?= $row['Fecha_menu'] ?></td>
                            <td><?= $row['tipo'] ?></td>
                            <td>
                                <a href="show.php?id=<?= $row['id'] ?>" class="btn btn-secondary">Ver</a>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>

        </div>
    </div>
</div>


<?php
include(SHARED_PATH . 'footer.php');