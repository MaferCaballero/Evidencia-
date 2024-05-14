<?php 
$titulo='Contactanos';
include('default.php');
require('admin/private/init.php');
$contact = mysqli_fetch_assoc(contact_por_id(1));
?>

<body>
  

    <h1><?=$contact['Titulo_contact']?></h1>

    <script>
      // Selecciona el elemento del icono por su ID
      const icono = document.getElementById('icono');

      // Agrega un event listener para el evento 'mouseover'
      icono.addEventListener('mouseover', function() {
          // Agrega la clase para el color al pasar el mouse
          this.querySelector('i').classList.add('icono-hover');
      });

      // Agrega un event listener para el evento 'mouseout'
      icono.addEventListener('mouseout', function() {
          // Quita la clase para el color al pasar el mouse
          this.querySelector('i').classList.remove('icono-hover');
      });

      // Agrega un event listener para el evento 'click'
      icono.addEventListener('click', function() {
          // Agrega la clase para el color al hacer clic
          this.querySelector('i').classList.add('icono-active');
      });
    </script>

    <div class="form-floating mb-3 boton">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput"><?=$contact['email_contact']?></label>
    </div>
    <div class="form-floating boton">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword"><?=$contact['name_contact']?></label>
    </div>
    <br>
    <div class="form-floating mb-3 boton">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput"><?=$contact['lastname_contact']?></label>
    </div>

    <div class="form-floating boton">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
        <label for="floatingTextarea2"><?=$contact['message_contact']?></label>
    </div>
    <button type="submit" class="btn btn-primary bot">Submit</button>

    <br><br>

    <!-- <img class="rojo"src="imgE/rojo.jpeg" alt="rojo"> -->

    <br><br>

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