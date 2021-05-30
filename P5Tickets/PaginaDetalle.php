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
                    <img class="logo-menu" src="imgs/p5_logo.webp">


                    <button type="button" class="mob-close fas fa-times" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>


                </div>

                <div class="offcanvas-body menu-body elementos-menu">
                    <a href="#"><img class="menu-title" src="imgs/Menu_btn.webp"></a>

                    <hr>

                    <a href="#"><img class="menu-item" src="imgs/Eventos_btn.webp"></a>
                    <a href="#"><img class="menu-item" src="imgs/Categoria_btn.webp"></a>
                </div>

            </div>

            <!-- imagen del centro del top bar -->
            <a href="index.php"><img class="logo-top-bar" src="imgs/p5_logo.webp"></a>


            <!-- search button -->
            <section class="icono-buscar">

                <a class="fas fa-search lupa" data-bs-toggle="offcanvas" href="#offcanvas"
                    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"></a>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                    aria-labelledby="offcanvasRightLabel">

                    <div class="offcanvas-header header_menu">
                        <img class="logo-menu" src="imgs/p5_logo.webp">
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

            <!-- Menu escritorio -->
            <section class="top-bar-desktop">

                <nav class="navbar navbar-light">
                    <div class="container-fluid">
                        <a href="#"><img class="menu-item" src="imgs/Eventos_btn.webp"></a>
                            <a href="#"><img class="menu-item" src="imgs/Categoria_btn.webp"></a>
                        <form class="d-flex">
                            
                            <input class="form-control me-2" type="search" placeholder="Buscar"
                                aria-label="Search">
                            <button class="btn btn-success boton-buscar" type="submit">Buscar</button>
                        </form>
                    </div>
                </nav>

            </section>


        </section>
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
                    <img class="img-fluid imagen-articulo" src="imgs/box_imgs/karaoke_img.webp" alt="imagen del torneo"
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
                    <a><img class="img-fluid boton-aprende-mas" data-bs-toggle="modal" href="#modal1"
                            src="imgs/boton_registrarte.webp" alt="boton aprende mas" loading="lazy"></a>
                </div>
            </div>

        </div>
    </section>

    <section class="pop-up">

        <!--seccion 1 del pop up-->
        <div class="modal fade" id="modal1" aria-hidden="true" aria-labelledby="modal1" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered background-popup1">
                <div class="modal-content contenido-popup">

                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalToggleLabel">Registrarse para el evento</h4>
                        <button type="button" class="mob-close fas fa-times" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>

                    <div class="modal-body">

                        <div class="row">
                            <div class="col">
                                <label for="inputName" class="form-label">Personas Mayores de edad</label>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" id="mayores">
                            </div>
                            <div class="col checkbox">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1"><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="inputName" class="form-label">Personas Menores de edad</label>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" id="menores">
                            </div>
                            <div class="col checkbox">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            </div>
                        </div>
                        <p>
                            Costo por menor de edad: ₡5000 <br>
                            costo por mayor de edad: ₡7000 <br>
                            costo total: ₡0000 <br>
                        </p>

                    </div>

                    <div class="modal-footer">
                        <img class="imagen-boton-confirmar" data-bs-target="#modal2" data-bs-toggle="modal"
                            data-bs-dismiss="modal" src="/imgs/boton-confirmar.webp" alt="">
                    </div>

                </div>
            </div>
        </div>

        <!--seccion 2 del pop up-->
        <div class="modal fade" id="modal2" aria-hidden="true" aria-labelledby="modal2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered background-popup">
                <div class="modal-content contenido-popup">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalToggleLabel2">Confirmar el registro</h5>
                        <button type="button" class="mob-close fas fa-times" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="inputName" class="form-label">Nombre Completo</label>
                            <input type="text" class="form-control" id="inputName">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <img class="imagen-boton-confirmar" data-bs-target="#modal3" data-bs-toggle="modal"
                            data-bs-dismiss="modal" src="/imgs/boton-confirmar.webp" alt="">
                    </div>
                </div>
            </div>
        </div>

        <!--seccion 3 del pop up-->
        <div class="modal fade" id="modal3" aria-hidden="true" aria-labelledby="modal3" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered background-popup">
                <div class="modal-content contenido-popup">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalToggleLabel">Resumen de la reservación</h4>
                        <button type="button" class="mob-close fas fa-times" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        Personas Mayores de edad: #<br>
                        Personas Menores de edad: #<br>
                        Precio por persona mayor: #<br>
                        Precio por persona menor: #<br>
                        Precio total: #<br>
                        Nombre Completo: #<br>
                        Correo Electronico: #<br>
                    </div>
                    <div class="modal-footer">
                        <img class="imagen-boton-confirmar" data-bs-target="" data-bs-toggle="modal"
                            data-bs-dismiss="modal" src="/imgs/boton-finalizar.webp" alt="">
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="eventos-similares">

        <img class="img-fluid imagen-eventos-similares" src="/imgs/Eventos_similares.webp" alt="">


        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="PaginaDetalle.php"><img src="/imgs/miniaturas/cosplay-mini.webp" class="d-block w-100"
                            alt="miniatura de cosplays" loading="lazy"></a>
                </div>
                <div class="carousel-item">
                    <a href="PaginaDetalle.php"><img src="/imgs/miniaturas/entrevista-mini.webp" class="d-block w-100"
                            alt="miniatura de entrevistas" loading="lazy"></a>
                </div>
                <div class="carousel-item">
                    <a href="PaginaDetalle.php"><img src="/imgs/miniaturas/exclusiva-mini.webp" class="d-block w-100"
                            alt="miniatura de exclusiva" loading="lazy"></a>
                </div>
                <div class="carousel-item">
                    <a href="PaginaDetalle.php"><img src="/imgs/miniaturas/firmas-mini.webp" class="d-block w-100"
                            alt="miniatura de firmas" loading="lazy"></a>
                </div>
                <div class="carousel-item">
                    <a href="PaginaDetalle.php"><img src="/imgs/miniaturas/karaoke-mini.webp" class="d-block w-100"
                            alt="miniatura de karaoke" loading="lazy"></a>
                </div>
                <div class="carousel-item">
                    <a href="PaginaDetalle.php"><img src="/imgs/miniaturas/torneo-mini.webp" class="d-block w-100"
                            alt="miniatura de torneo" loading="lazy"></a>
                </div>
            </div>

            <button class="carousel-control-prev flechas" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <img class="img-fluid" src="/imgs/miniaturas/flecha_izquierda.webp" alt="flecha izquierda">
            </button>

            <button class="carousel-control-next flechas" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <img class="img-fluid" src="/imgs/miniaturas/flecha_derecha.webp" alt="flecha derecha">
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