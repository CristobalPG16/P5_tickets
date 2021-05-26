<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles</title>
    <!-- Bootstrap link/version -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <!-- Bootstrap javascrip animacion -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" crossorigin="anonymous">
    </script>

    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;900&family=Roboto:wght@300;400;900&display=swap"
        rel="stylesheet">

    <!-- ICONOS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <!-- Main stylesheet -->
    <link rel="stylesheet" href="./css/stylePaginaDetalle.css" rel="stylesheet">
</head>

<!-- div.row>div.col*4 -->

<body>

    <header>
        <section class="top-bar">

            <!-- Menu amburguesa -->
            <span class="menu" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                aria-controls="offcanvasExample">&#9776; </span>

            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                aria-labelledby="offcanvasExampleLabel">

                <div class="offcanvas-header header_menu">
                    <img class="logo-menu" src="imgs/p5_logo.png">


                    <button type="button" class="mob-close fas fa-times" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>


                </div>

                <div class="offcanvas-body menu-body elementos-menu">
                    <a href="#"><img class="menu-title" src="imgs/Menu_btn.png"></a>

                    <hr>

                    <a href="#"><img class="menu-item" src="imgs/Eventos_btn.png"></a>
                    <a href="#"><img class="menu-item" src="imgs/Categoria_btn.png"></a>
                </div>

            </div>

            <!-- imagen del centro del top bar -->
            <img class="logo-top-bar" src="imgs/p5_logo.png">


            <!-- search button -->
            <section class="icono-buscar">

                <a class="fas fa-search lupa" data-bs-toggle="offcanvas" href="#offcanvas"
                    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"></a>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                    aria-labelledby="offcanvasRightLabel">

                    <div class="offcanvas-header header_menu">
                        <img class="logo-menu" src="imgs/p5_logo.png">
                        <button type="button" class="mob-close fas fa-times" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>

                    <div class="offcanvas-body menu-body">
                        <div class="barra-buscar">
                            <nav class="navbar navbar-light">
                                <div class="container-fluid">
                                    <form class="d-flex">
                                        <input class="form-control me-2" type="search" placeholder="Buscar"
                                            aria-label="Search">
                                        <button class="btn btn-success boton-buscar" type="submit">Buscar</button>
                                    </form>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>

            </section>

        </section>
        <!-- Menu amburguesa -->
    </header>

    <section class="section-detalle">

        <div class="all-information">
            <div class="row">
                <div class="col info">
                    <h1>#Categoria<br>
                        Lugar: Salon B6<br>
                        Fecha: 18/09/2020<br>
                        Hora: 5:00 pm<br>
                        Precio: ₡5000<br>
                        Para: +18<br>
                    </h1>
                </div>

                <div class="col imagen">
                    <img class="img-fluid imagen-articulo" src="imgs/box_imgs/karaoke_img.png" alt="imagen del torneo"
                        loading="lazy">
                </div>

                <div class="col-sm-12">
                    <h2>Lorem Ipsum es simplemente el texto de relleno de las
                        imprentas y archivos de texto. Lorem Ipsum ha sido el
                        texto de relleno estándar de las industrias desde el
                        año 1500, cuando un impresor (N. del T. persona que se
                        dedica a la imprenta) desconocido usó una galería de
                        textos y los mezcló de tal manera que logró hacer un
                        libro de textos especimen. No sólo sobrevivió 500 años,
                        sino que tambien ingresó como texto de relleno en
                        documentos electrónicos, quedando esencialmente igual al
                        original.
                    </h2>
                </div>

                <div class="col-sm-12">
                    <a href="#"><img class="img-fluid boton-aprende-mas" src="imgs/boton_registrarte.png"
                            alt="boton aprende mas" loading="lazy"></a>
                </div>
            </div>

        </div>

    </section>

    <section class="eventos-similares">

        <img class="img-fluid imagen-eventos-similares" src="/imgs/Eventos_similares.png" alt="">


        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <a href="PaginaDetalle.html"><img src="/imgs/miniaturas/cosplay-mini.png" class="d-block w-100" alt="miniatura de cosplays" loading="lazy"></a>
              </div>
              <div class="carousel-item">
                <a href="PaginaDetalle.html"><img src="/imgs/miniaturas/entrevista-mini.png" class="d-block w-100" alt="miniatura de entrevistas" loading="lazy"></a>
              </div>
              <div class="carousel-item">
                <a href="PaginaDetalle.html"><img src="/imgs/miniaturas/exclusiva-mini.png" class="d-block w-100" alt="miniatura de exclusiva" loading="lazy"></a>
              </div>
              <div class="carousel-item">
                <a href="PaginaDetalle.html"><img src="/imgs/miniaturas/firmas-mini.png" class="d-block w-100" alt="miniatura de firmas" loading="lazy"></a>
              </div>
              <div class="carousel-item">
                <a href="PaginaDetalle.html"><img src="/imgs/miniaturas/karaoke-mini.png" class="d-block w-100" alt="miniatura de karaoke" loading="lazy"></a>
              </div>
              <div class="carousel-item">
                <a href="PaginaDetalle.html"><img src="/imgs/miniaturas/torneo-mini.png" class="d-block w-100" alt="miniatura de torneo" loading="lazy"></a>
              </div>
            </div>

            <button class="carousel-control-prev flechas" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <img class="img-fluid" src="/imgs/miniaturas/flecha_izquierda.png" alt="flecha izquierda">
            </button>

            <button class="carousel-control-next flechas" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <img class="img-fluid" src="/imgs/miniaturas/flecha_derecha.png" alt="flecha derecha">
            </button>

          </div>
          
    </section>

    <footer>

        <section class="copyrigth-text">
            <p class="texto-footer">Copyright © 2021 P5. All rights reserved. The order process, tax issue and invoicing
                to end user is
                conducted by Wondershare Technology Co., Ltd, which is the subsidiary of Wondershare group.</p>
        </section>

    </footer>


</body>

</html>