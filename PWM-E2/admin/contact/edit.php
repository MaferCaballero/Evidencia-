<?php
require('../private/init.php');
$idcontact = $_GET['id'];
$idcontact = mysqli_fetch_assoc(contact_por_id($idcontact));
include(SHARED_PATH . 'header.php'); 
?>

<div class="container py-5">
    <div class="row mb-4">
        <div class="col">
            <header class="py-3 bg-danger text-center text-white">
                <h1 class="mb-0">Editar contact</h1>
            </header>
        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-12 col-md-9 col-lg-6">

            <form action="update.php" method="post">
                <input type="hidden" name="id" value="<?= $idcontact['id'] ?>">

            
                <div class="mb-3">
                    <label for="" class="form-label">Titulo *</label>
                    <input type="text" name="Titulo_contact" class="form-control" value="<?= $idcontact['Titulo_contact'] ?>">
                
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email *</label>
                    <input type="text" name="email_contact" class="form-control" value="<?= $idcontact['email_contact'] ?>">
                
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Name *</label>
                    <input type="text" name="name_contact" class="form-control" value="<?= $idcontact['name_contact'] ?>">
                
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Last name *</label>
                    <input type="text" name="lastname_contact" class="form-control" value="<?= $idcontact['lastname_contact'] ?>">
                
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Message *</label>
                    <input type="text" name="message_contact" class="form-control" value="<?= $idcontact['message_contact'] ?>">
                
                </div>

                <div class="text-end">
                    <input type="submit" value="Editar contact" class="btn btn-warning">
                </div>
            </form>

        </div>
    </div>
</div>


<?php
include(SHARED_PATH . 'footer.php');