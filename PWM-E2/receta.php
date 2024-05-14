<?php 
$titulo='Recetas';
include('default.php');
require('admin/private/init.php');
$id=$_GET['id'];
$menu = mysqli_fetch_assoc(menu_por_id($id));
?>
<body>
  
    <div class="h1">
        <h1>Receta:<?=$menu['Titulo_menu']?> </h1>
    </div>

    <div class="card mb-3 mx-auto" style="width: 800px; height: 500px;">
        <img class="flan"src=<?=$menu['Url_menu']?> style="object-fit: cover; width: 100%; height: 70%;" class="card-img-top" alt="postre"> 
        

        <div class="card-body">
          <h5 class="card-title"><?=$menu['Titulo_menu']?></h5>
          <p class="card-text"><?=$menu['Contenido_menu']?></p>
          <p class="card-text"><small class="text-body-secondary">Last updated:<?=$menu['Fecha_menu']?></small></p>
        </div>
    </div>
  

    <footer class="py-3"style="background-color: #EC691F;">
    
        <div class="container">
    
            <div class="row justify-content-center">
    
                <div class="col-12 col-md-6">
    
                    <small class="text-white">TERMS    PRIVACY POLICY</small>
    
                </div>
    
            </div>
    
        </div>
    
    </footer>
    
</body>
</html>