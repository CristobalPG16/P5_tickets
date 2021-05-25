<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P5 Tickets</title>
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
    <link rel="stylesheet" href="./css/style.css" rel="stylesheet">
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

    <!-- seccion de bienvenida -->
    <section class="welcome-section">
        <img class="img-fluid" src="imgs/texto-bienvenida.png" alt="consigue tu Ticket para el evento">
    </section>

    <section class="articulos">

        <div class="container">
            <div class="row">

                <div class="col-sm-6 karaoke-box">
                    <div class="elementos-box">
                        <div class="row">
                            <div class="col informacion">
                                #Categoria <br>
                                Lugar: Salon B6<br>
                                Fecha: 18/09/2020<br>
                                Hora: 5:00 pm<br>
                                Precio: ₡5000<br>
                                Para: +18<br>
                            </div>
                            <div class="col">
                                <img class="img-fluid imagen-articulo" src="imgs/box_imgs/karaoke_img.png"
                                    alt="Karaoke">
                            </div>
                        </div>
                        <div class="row boton-row">
                            <div class="col"></div>
                            <div class="col">
                                <a><img class="img-fluid" src="imgs/box_imgs/aprende-mas_btn.png" alt="Karaoke"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 cosplay-box">
                    <div class="elementos-box">
                        <div class="row">
                            <div class="col informacion">
                                #Categoria <br>
                                Lugar: Salon B6<br>
                                Fecha: 18/09/2020<br>
                                Hora: 5:00 pm<br>
                                Precio: ₡5000<br>
                                Para: +18<br>
                            </div>
                            <div class="col">
                                <img class="img-fluid imagen-articulo" src="imgs/box_imgs/cosplay_img.png"
                                    alt="Karaoke">
                            </div>
                        </div>
                        <div class="row boton-row">
                            <div class="col"></div>
                            <div class="col">
                                <a><img class="img-fluid" src="imgs/box_imgs/aprende-mas_btn.png" alt="Karaoke"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 torneo-box">
                    <div class="elementos-box">
                        <div class="row">
                            <div class="col informacion">
                                #Categoria <br>
                                Lugar: Salon B6<br>
                                Fecha: 18/09/2020<br>
                                Hora: 5:00 pm<br>
                                Precio: ₡5000<br>
                                Para: +18<br>
                            </div>
                            <div class="col">
                                <img class="img-fluid imagen-articulo" src="imgs/box_imgs/torneo_img.png" alt="Karaoke">
                            </div>
                        </div>
                        <div class="row boton-row">
                            <div class="col"></div>
                            <div class="col">
                                <a><img class="img-fluid" src="imgs/box_imgs/aprende-mas_btn.png" alt="Karaoke"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 entrevista-box">
                    <div class="elementos-box">
                        <div class="row">
                            <div class="col informacion">
                                #Categoria <br>
                                Lugar: Salon B6<br>
                                Fecha: 18/09/2020<br>
                                Hora: 5:00 pm<br>
                                Precio: ₡5000<br>
                                Para: +18<br>
                            </div>
                            <div class="col">
                                <img class="img-fluid imagen-articulo" src="imgs/box_imgs/entrevista_img.png"
                                    alt="Karaoke">
                            </div>
                        </div>
                        <div class="row boton-row">
                            <div class="col"></div>
                            <div class="col">
                                <a><img class="img-fluid" src="imgs/box_imgs/aprende-mas_btn.png" alt="Karaoke"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 firmas-box">
                    <div class="elementos-box">
                        <div class="row">
                            <div class="col informacion">
                                #Categoria <br>
                                Lugar: Salon B6<br>
                                Fecha: 18/09/2020<br>
                                Hora: 5:00 pm<br>
                                Precio: ₡5000<br>
                                Para: +18<br>
                            </div>
                            <div class="col">
                                <img class="img-fluid imagen-articulo" src="imgs/box_imgs/firmas-img.png" alt="Karaoke">
                            </div>
                        </div>
                        <div class="row boton-row">
                            <div class="col"></div>
                            <div class="col">
                                <a><img class="img-fluid" src="imgs/box_imgs/aprende-mas_btn.png" alt="Karaoke"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 exclusiva-box">
                    <div class="elementos-box">
                        <div class="row">
                            <div class="col informacion">
                                #Categoria <br>
                                Lugar: Salon B6<br>
                                Fecha: 18/09/2020<br>
                                Hora: 5:00 pm<br>
                                Precio: ₡5000<br>
                                Para: +18<br>
                            </div>
                            <div class="col">
                                <img class="img-fluid imagen-articulo" src="imgs/box_imgs/exclusivo_img.png"
                                    alt="Karaoke">
                            </div>
                        </div>
                        <div class="row boton-row">
                            <div class="col"></div>
                            <div class="col">
                                <a><img class="img-fluid" src="imgs/box_imgs/aprende-mas_btn.png" alt="Karaoke"></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>


    <footer>

        <section class="copyrigth-text">
            <p>Copyright © 2021 P5. All rights reserved. The order process, tax issue and invoicing to end user is
                conducted by Wondershare Technology Co., Ltd, which is the subsidiary of Wondershare group.</p>
        </section>

    </footer>


</body>

</html>