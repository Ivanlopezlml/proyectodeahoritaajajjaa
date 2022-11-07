 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Raleway:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <title>Salon de eventos </title>
</head>
<body>
    
    <header>
        <h1 class="nombre-sitio">SALON DE <span>EVENTOS</span></h1>
    </header>

    <div class="contenedor-navegacion">
        <nav class="nav-principal contenedor">

           <a class="enlace" href="">about</a>
            <body class="antialiased">
            <button>
                <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                    @else
                        
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                        </div>
                        <a class="nav-link" href="" ></a>
                        
                        </div>
                    </button>
            <button>
            <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
                 
            </button>

       
    </div>

    <div class="hero"></div>

    <section class="contenedor categorias"><!-- esta es una seccion Nuevan-->
        <h2>Categororia <span>Productos</span></h2>
        <div class="listado-categorias"> <!-- Creamos otro div para usar css grid se necesita una clase padre para no afectar al h2 que no se necesita que tenga css grid-->
            <div class="categoria"><!-- * Utilizamos div ya que no hay ninguna regla de alguna etiqueta que empieze con img-->
                <img src="img/categoria1.jpg" alt="Imagen de Categoria 1">
                <a href="#">Ofincina</a>
            </div>
            <div class="categoria">
                <img src="img/categoria2.jpg" alt="Imagen de Categoria 2">
                <a href="#">Hogar</a>
            </div>
            <div class="categoria">
                <img src="img/categoria3.jpg" alt="Imagen de Categoria 3">
                <a href="#">Cocina</a>
            </div>
        </div>
    </section>

    <section>
        <div class="sobre-nosotros">  <!-- esta sera quien resiva el display  -->
            <div class="contenedor sobre-nosotros-grid">

                <div class="texto-nosotros">
                    <h2 class="text-center">Sobre Nosotros</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla, 
                        ariatur enim tenetur dolor iste ea iusto atque! Autem numquam velit rem. 
                        Quisquam harum accusamus magnam sapiente officiis perferendis quos enim.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <main class="contenido-principal contenedor">
        <!-- ! cunado inicie un heading(h2,h3..) siempre se tendra que poner dentro de un section-->
        <h2 class="text-center">Nuestros Productos</h2> 
        <!--Aqui va la lista de los productos-->
        <div class="listado-productos"> <!-- Div Principal-->

            <div class="producto"> <!-- div de la imgen que contiene la informacion-->
                <img src="img/producto1.jpg" alt="Imagen producto">
                <div class="texto-producto"> <!-- div de la informacion -->
                    <h3>Producto 1</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit pariatur sunt.</p>
                    <p class="precio">$1200</p>
                    <a class= "btn" href="#">Agregar al Carrito</a> <!-- puede agregar la etiqueta boton tambien-->
                </div> <!-- cierre de div con informacion-->
            </div> <!-- cierre de div con imagen-->

            <div class="producto"> <!-- div de la imgen que contiene la informacion-->
                <img src="img/producto2.jpg" alt="Imagen producto">
                <div class="texto-producto"> <!-- div de la informacion -->
                    <h3>Producto 2</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus libero dolores quos quisquam distinctio, ex molestiae nulla ipsam. Quaerat deleniti est deserunt accusantium animi nesciunt tempore aliquam labore, pariatur sunt.</p>
                    <p class="precio">$1500</p>
                    <a class= "btn" href="#">Agregar al Carrito</a> <!-- se puede agregar la etiqueta boton tambien-->
                </div> <!-- cierre de div con informacion-->
            </div> <!-- cierre de div con imagen-->

            <div class="producto"> <!-- div de la imgen que contiene la informacion-->
                <img src="img/producto3.jpg" alt="Imagen producto">
                <div class="texto-producto"> <!-- div de la informacion -->
                    <h3>Producto 3</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus libero dolores quos quisquam distinctio, ex molestiae nulla ipsam. Quaerat deleniti est deserunt accusantium animi nesciunt tempore aliquam labore, pariatur sunt.</p>
                    <p class="precio">$1890</p>
                    <a class= "btn" href="#">Agregar al Carrito</a> <!-- se puede agregar la etiqueta boton tambien-->
                </div> <!-- cierre de div con informacion-->
            </div> <!-- cierre de div con imagen-->

            <div class="producto"> <!-- div de la imgen que contiene la informacion-->
                <img src="img/producto4.jpg" alt="Imagen producto">
                <div class="texto-producto"> <!-- div de la informacion -->
                    <h3>Producto 4</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus libero dolores quos quisquam distinctio, ex molestiae nulla ipsam. Quaerat deleniti est deserunt accusantium animi nesciunt tempore aliquam labore, pariatur sunt.</p>
                    <p class="precio">$1990</p>
                    <a class= "btn" href="#">Agregar al Carrito</a> <!-- se puede agregar la etiqueta boton tambien-->
                </div> <!-- cierre de div con informacion-->
            </div> <!-- cierre de div con imagen-->


            <div class="producto"> <!-- div de la imgen que contiene la informacion-->
                <img src="img/producto5.jpg" alt="Imagen producto">
                <div class="texto-producto"> <!-- div de la informacion -->
                    <h3>Producto 5</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus libero dolores quos quisquam distinctio, ex molestiae nulla ipsam. Quaerat deleniti est deserunt accusantium animi nesciunt tempore aliquam labore, pariatur sunt.</p>
                    <p class="precio">$1999</p>
                    <a class= "btn" href="#">Agregar al Carrito</a> <!-- se puede agregar la etiqueta boton tambien-->
                </div> <!-- cierre de div con informacion-->
            </div> <!-- cierre de div con imagen-->

            <div class="producto"> <!-- div de la imgen que contiene la informacion-->
                <img src="img/producto6.jpg" alt="Imagen producto">
                <div class="texto-producto"> <!-- div de la informacion -->
                    <h3>Producto 6</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus libero dolores quos quisquam distinctio, ex molestiae nulla ipsam. Quaerat deleniti est deserunt accusantium animi nesciunt tempore aliquam labore, pariatur sunt.</p>
                    <p class="precio">$2300</p>
                    <a class= "btn" href="#">Agregar al Carrito</a> <!-- se puede agregar la etiqueta boton tambien-->
                </div> <!-- cierre de div con informacion-->
            </div> <!-- cierre de div con imagen-->

        </div> <!-- Cierre de div Principal-->
    </main>

    <footer>
        <div class="footerX contenedor">
            <div>
                <h3>Categorias</h3>
                <nav class="EnlaceX">
                    <a href="#">Cocina</a>
                    <a href="#">Oficina</a>
                    <a href="#">Jardin</a>
                    <a href="#">Cochera</a>
                    <a href="#">Domitorios</a>
                </nav>
            </div>
    
            <div>
                <h3>Sobre Nosotros</h3>
                <nav class="Tamaño">
                    <a href="#">Nuestra Historia</a>
                    <a href="#">Mision, Vision y Valores</a>
                    <a href="#">Carrasa</a>
                    <a href="#">Polita de Privacidad</a>
                    <a href="#">Terminos de Servicio</a>
                </nav>
            </div>
    
            <div>
                <h3>Soporte</h3>
                <nav class="EnlaceX">
                    <a href="#">Preguntas Frecuentes</a>
                    <a href="#">Ayuda en Linea</a>
                    <a href="#">Confianza y Seguridad</a>
                </nav>
            </div>
        </div>
    </footer>
    <p class="text-center padding4">Todos los Derechos Reservaodos lvEr</p>
    <!-- <script src="script.js"></script> -->
    <script src="Notificacion.js"></script>
</body>
</html>

           
     