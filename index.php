<?php

session_start();

if(!isset($_SESSION['usuario'])){
    echo'
           <script>
                alert("Tiene que iniciar sesion");
                window.location="../login.php";
                s </script>
        ';
        header("location:/login.php");
        session_destroy();
        die();
        
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina de venta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="login/php/cerrar_sesion.php">Cerrar sesión</a>
    
    <header class="header">
        <div class="menu container">
            <a href="#" class="logo">logo</a>
            <input type="checkbox" id="menu">
            <label for="menu">
                <img src="imagenes/iconos/menu.png" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Productos</a></li>
                    <li><a href="#">Contactos</a></li>
                </ul>
            </nav>
            <div>
                <ul>
                    <li class="submenu">
                        <img src="imagenes/iconos/car.svg" id="img-carrito" alt="">
                        <div id="carrito">
                            <table class="lista-carrito">
                                <thead>
                                    <tr>
                                        <th>Imagen</th>
                                        <th>Nombre</th>
                                        <th>Precio</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                            <a href="#" id="vaciar-carrito" class="btn-2">Vaciar carrito</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="header-content container">
            <div class="header-txt">
                <h1>Ofertas especiales</h1>
                <p>Compra los mejores productos</p>
                <a href="#" class="btn-1">informacion</a>
            </div>
            <div class="header-img">
                <img src="imagenes/rigth.png" alt="">
            </div>
        </div>
    </header>

    <section class="oferts container" id="lista-1">
        <h2>Cualquier producto</h2>
        <p>Veritatis dolorem culpa distinctio...</p>
        <div class="oferts-content">
            <div class="oferts-1" data-id="1">
                <img src="imagenes/Pr1.jpg" alt="">
                <div class="product-txt">
                    <h3>Elisyum</h3>
                    <p>La mejor calidad</p>
                    <p class="precio">$54.990</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="1">Agregar</a>
                </div>
            </div>
            <div class="oferts-1">
                <img src="imagenes/Pr2.jpg" alt="">
                <div class="product-txt">
                    <h3>Elisyum</h3>
                    <p>La mejor calidad</p>
                    <p class="precio">$54.990</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="1">Agregar</a>
                </div>
            </div>

            <div class="logan-1">
                <h3>Sillas</h3>
                <p>
                    productos
                </p>
                <a href="#" class="btn-2">informacion</a>
            </div>
        </div>


        <div class="oferts-content">
            <div class="logan-1">
                <h3>Sillas</h3>
                <p>
                    productos
                </p>
                <a href="#" class="btn-2">informacion</a>
            </div>
            <div class="oferts-1">
                <img src="imagenes/Pr3.jpg" alt="">
                <div class="product-txt">
                    <h3>Elisyum</h3>
                    <p>La mejor calidad</p>
                    <p class="precio">$54.990</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="3">Agregar</a>
                </div>
            </div>

            <div class="oferts-1">
                <img src="imagenes/Pr4.jpg" alt="">
                <div class="product-txt">
                    <h3>Elisyum</h3>
                    <p>La mejor calidad</p>
                    <p class="precio">$54.990</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="4">Agregar</a>
                </div>
            </div>
            
        </div>

    </section>

    <section class="promotion">

        <div class="promotion-content container">

            <div class="promotion-txt">
                <h2>Las mejores promociones</h2>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                    Qui recusandae accusantium expedita nulla officia culpa, 
                    quidem harum cum, consectetur velit amet similique distinctio quo. 
                    Nesciunt voluptate ea iste? Beatae, nulla!
                </p>
                <a href="#" class="btn-1">informacion</a>
            </div>

            <div class="promotion-img">
                <img src="imagenes/r1.jpg" alt="">
            </div>

        </div>

    </section>

    <main class="proctud container" id="lista-2">
        <h2>Productos</h2>
        <p>Lorem ipsum dolor sit amet...</p>
        <div class="product-content">
            <div class="oferts-1" data-id="5">
                <img src="imagenes/1.jpg" alt="">
                <div class="product-txt">
                    <h3>Elisyum</h3>
                    <p>La mejor calidad</p>
                    <p class="precio">$54.990</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="5">Agregar</a>
                </div>
            </div>

            <div class="oferts-1">
                <img src="imagenes/2.png" alt="">
                <div class="product-txt">
                    <h3>Elisyum</h3>
                    <p>La mejor calidad</p>
                    <p class="precio">$54.990</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="6">Agregar</a>
                </div>
            </div>

            <div class="oferts-1">
                <img src="imagenes/3.jpg" alt="">
                <div class="product-txt">
                    <h3>Elisyum</h3>
                    <p>La mejor calidad</p>
                    <p class="precio">$59.990</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="7">Agregar</a>
                </div>
            </div>

            <div class="oferts-1">
                <img src="imagenes/4.jpg" alt="">
                <div class="product-txt">
                    <h3>Elisyum</h3>
                    <p>La mejor calidad</p>
                    <p class="precio">$54.990</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="8">Agregar</a>
                </div>
            </div>

            <div class="oferts-1">
                <img src="imagenes/5.jpg" alt="">
                <div class="product-txt">
                    <h3>Elisyum</h3>
                    <p>La mejor calidad</p>
                    <p class="precio">$54.990</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="9">Agregar</a>
                </div>
            </div>

            <div class="oferts-1">
                <img src="imagenes/6.png" alt="">
                <div class="product-txt">
                    <h3>Elisyum</h3>
                    <p>La mejor calidad</p>
                    <p class="precio">$54.990</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="10">Agregar</a>
                </div>
            </div>

        </div>

    </main>
    <section class="blog container">
        <h2>Nuevas noticias</h2>
        <p>
            Rem, optio et fuga eaque saepe dolor odit, dicta architecto sunt quis dignissimos 
        </p>

        <div class="blog-content">

            <div class="blog-1">
                <img src="imagenes/b1.jpg" alt="">
                <div class="blog-txt">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Odit nihil praesentium cupiditate vitae ipsum,
                        omnis eligendi nobis, impedit natus enim nulla ipsa,
                        sapiente eum culpa at voluptatem cum consectetur.
                        Nam?
                    </p>
                    <a href="#" class="btn-4">Leer mas</a>
                </div>
            </div>

            <div class="blog-1">
                <img src="imagenes/b2.jpg" alt="">
                <div class="blog-txt">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Odit nihil praesentium cupiditate vitae ipsum,
                        omnis eligendi nobis, impedit natus enim nulla ipsa,
                        sapiente eum culpa at voluptatem cum consectetur.
                        Nam?
                    </p>
                    <a href="#" class="btn-4">Leer mas</a>
                </div>
            </div>

            <div class="blog-1">
                <img src="imagenes/b3.jpg" alt="">
                <div class="blog-txt">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Odit nihil praesentium cupiditate vitae ipsum,
                        omnis eligendi nobis, impedit natus enim nulla ipsa,
                        sapiente eum culpa at voluptatem cum consectetur.
                        Nam?
                    </p>
                    <a href="#" class="btn-4">Leer mas</a>

                </div>

            </div>

        </div>

    </section>


    <footer class="footer container">

        <div class="link">
            <h3>Lorem33</h3>
            <ul>
                <li><a href="">lorem</a></li>
                <li><a href="">lorem</a></li>
                <li><a href="">lorem</a></li>
                <li><a href="">lorem</a></li>
            </ul>
        </div>

        <div class="link">
            <h3>Lorem33</h3>
            <ul>
                <li><a href="">lorem</a></li>
                <li><a href="">lorem</a></li>
                <li><a href="">lorem</a></li>
                <li><a href="">lorem</a></li>
            </ul>
        </div>

        <div class="link">
            <h3>Lorem33</h3>
            <ul>
                <li><a href="">lorem</a></li>
                <li><a href="">lorem</a></li>
                <li><a href="">lorem</a></li>
                <li><a href="">lorem</a></li>
            </ul>
        </div>

        <div class="link">
            <h3>Lorem33</h3>
            <ul>
                <li><a href="">lorem</a></li>
                <li><a href="">lorem</a></li>
                <li><a href="">lorem</a></li>
                <li><a href="">lorem</a></li>
            </ul>
        </div>

    </footer>
    


    <script src="script.js"></script>
</body>
</html>