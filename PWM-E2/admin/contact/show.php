<?php
require('../private/init.php');
$id = $_GET['id'];
$contact = mysqli_fetch_assoc(contact_por_id($id));
include(SHARED_PATH . 'header.php'); 
?>

<div class="container py-5">
    <div class="row mb-4">
        <div class="col">
            <header class="py-3 bg-danger text-center text-white">
                <h1 class="mb-0">Contact</h1>
            </header>
        </div>
    </div>

    <div class="row justify-content-center mb-4">
        <div class="col-12 col-md-9 col-lg-6">
            <p><b>Titulo: </b><?= $contact['Titulo_contact'] ?></p>
        </div>
    </div>


    <div class="row justify-content-center mb-4">
        <div class="col-12 col-md-9 col-lg-6">
            <p><b>Email: </b><?= $contact['email_contact'] ?></p>
        </div>
    </div>

    <div class="row justify-content-center mb-4">
        <div class="col-12 col-md-9 col-lg-6">
            <p><b>Name: </b><?= $contact['name_contact'] ?></p>
        </div>
    </div>

    <div class="row justify-content-center mb-4">
        <div class="col-12 col-md-9 col-lg-6">
            <p><b>Lastname: </b><?= $contact['lastname_contact'] ?></p>
        </div>
    </div>

    <div class="row justify-content-center mb-4">
        <div class="col-12 col-md-9 col-lg-6">
            <p><b>Message: </b><?= $contact['message_contact'] ?></p>
        </div>
    </div>


    <div class="row">
        <div class="col text-end">
            <a href="edit.php?id=<?= $contact['id'] ?>" class="btn btn-warning me-4">Editar</a>
            <a href="../index.php" class="btn btn-success me-4">Regresar</a>
        </div>
        
           

    </div>
</div>



<?php
include(SHARED_PATH . 'footer.php');