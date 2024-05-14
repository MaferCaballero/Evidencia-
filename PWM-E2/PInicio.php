<?php 
$titulo='Tandoori';
include('default.php');

?>
<body>
        <br>

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

        <h1 id="texto">¡WELCOME!</h1>

        <script>
          const texto = document.getElementById('texto');
        
          setInterval(() => {
            // Cambia el color del texto entre azul y rojo
            if (texto.style.color === 'blue') {
              texto.style.color = 'red';
            } else {
              texto.style.color = 'blue';
            }
          }, 1000); // Cambia el intervalo de cambio de color según desees
        </script>

        <img class="logo " src="imgE/figura4.png " alt="logo">
    
        <h3>INDIAN FOOD</h3>
        <h4>
          <a href="aboutus.php"><button>ABOUT US</button></a>
       </h4>

        <!-- Carrusel -->
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="imgE/c1.jpg" class="d-block w-100 carrusel" alt="c1">
              </div>
              <div class="carousel-item">
                <img src="imgE/c2.jpg" class="d-block w-100 carrusel" alt="c2">
              </div>
              <div class="carousel-item">
                <img src="imgE/c3.jpg" class="d-block w-100 carrusel" alt="c3">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
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