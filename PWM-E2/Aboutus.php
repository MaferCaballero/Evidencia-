<?php 
$titulo='Sobre nosotros';
include('default.php'); 
require('admin/private/init.php');
$about = mysqli_fetch_assoc(about_por_id(1));
?>
<body>
    
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-1 column1">
                    <!-- Imagen y texto en aside -->
                    <aside>
                        <img src="imgE/c2.jpg" alt="Descripción de la imagen">
                        
                    </aside>
                    
                    <!-- Contenido principal -->
                    <div>
                        <!-- Aquí puedes colocar el resto de tu contenido -->
                        <h3><?=$about['Titulo_about']?></h3>
                        <p><?=$about['Contenido_about']?>
                        </p>
                    </div>
                </div>
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