<!DOCTYPE html>
<html lang="fr-fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Habille-Et-Vous</title>

    <!-- Css -->
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
<!-- header -->

    <?php include './header.footer/header.php'; ?>

<!-- end header -->

<!-- menu of site -->
<nav class="container-fluid nav-produtos">
    <!-- container -->
    <section class="container">
        <!-- menu -->
        <ul class="nav">
            <!-- lista de itens -->
            <li class="col-xl-2 col-lg-3 col-md-12 nav-item d-flex align-items-center">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-list" fill="currentColor"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
                Homme

                <!-- submenu -->
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="#">
                            Nouveautés
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#">
                            Plus Size
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#">
                            Mode Plage
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#">
                            Accessoires
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#">
                            Promotion
                        </a>
                    </li>
                </ul>
                <!-- end submenu -->
            </li>

            <!-- lista de itens -->
            <li class="col-xl-2 col-lg-3 col-md-12 nav-item d-flex align-items-center">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-list" fill="currentColor"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
                Femme
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="#">
                            Nouveautés
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#">
                            Plus Size
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#">
                            Mode Plage
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#">
                            Accessoires
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#">
                            Promotion
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- menu -->
    </section>
    <!-- end container -->
</nav>
<!-- end menu of site -->

<!-- main -->
<main>
    
    <main>
        <!-- banners promotions rotate -->
        <section id="banners-promocionais" class="container carousel slide" data-ride="carousel">
            <!-- imagens -->
            <article class="carousel-inner">
                <figure class="carousel-item active">
                    <img src="111.jpg" class="d-block w-100" alt="Family">
                </figure>

                <figure class="carousel-item">
                    <img src="222.jpg" class="d-block w-100" alt="Couple">
                </figure>
            </article>

            <!-- prev -->
            <a class="carousel-control-prev" href="#banners-promocionais" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <!-- next -->
            <a class="carousel-control-next" href="#banners-promocionais" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </section>
        <!-- banners promotions rotate  -->

        <!-- banners promocionais com 6 colunas -->
        <section class="container banners-promocionais-statico">
            <!-- row -->
            <section class="row">
                <!-- banner -->
                <article class="col-md-6">
                    <div class="banners-promocionais-statico-12x d-flex align-items-center">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-credit-card" fill="currentColor"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z" />
                            <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z" />
                        </svg>

                        <p>
                            Tu paye 50%<br>
                            <strong>Nous on gagne 75%</strong>
                        </p>
                    </div>
                </article>

                <!-- banner -->
                <article class="col-md-6">
                    <div class="banners-promocionais-statico-todo-br d-flex align-items-center">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-fill" fill="currentColor"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                        </svg>
                        <p>
                            Livraison dans<br>
                            <strong>toute la France </strong>
                        </p>
                    </div>
                </article>
            </section>
            <!-- end row -->
        </section>
        <!-- end banners promocionais com 6 colunas -->

        <!-- container produtos -->
        <section class="container produtos">
            <!-- title -->
            <h1 class="text-center">Les Tendances</h1>

            <!-- listagem dos produto s -->
            <article class="row">

                <!-- produtos -->
                <a href="#" class="produtos-container col-md-3">
                    <!-- imagem do produto -->
                    <img src="00.jpg" class="img-fluid" alt="Veste Homme">

                    <!-- itens do produto -->
                    <article class="produtos-itens">
                        <!-- title produto -->
                        <h2>Veste Homme</h2>

                        <!-- stars -->
                        <div class="produtos-stars">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>

                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>

                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                        </div>

                        <!-- preco -->
                        <strong class="produtos-preco">
                            € 59,90
                        </strong>
                    </article>
                    <!-- end itens do produto -->
                </a>
                <!-- end produtos -->

                <!-- produtos -->
                <a href="oi.html" class="produtos-container col-md-3">
                    <!-- imagem do produto -->
                    <img src="11.jpg" class="img-fluid" alt="Jean Homme">

                    <!-- itens do produto -->
                    <article class="produtos-itens">
                        <!-- title produto -->
                        <h2>Jean Homme</h2>

                        <!-- stars -->
                        <div class="produtos-stars">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>

                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>

                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>

                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                        </div>

                        <!-- preco -->
                        <strong class="produtos-preco">
                            € 79,90
                        </strong>
                    </article>
                    <!-- end itens do produto -->
                </a>
                <!-- end produtos -->

                <!-- produtos -->
                <a href="#" class="produtos-container col-md-3">
                    <!-- imagem do produto -->
                    <img src="download.jpg" class="img-fluid" alt="Veste Femme">

                    <!-- itens do produto -->
                    <article class="produtos-itens">
                        <!-- title produto -->
                        <h2>Veste Femme</h2>

                        <!-- stars -->
                        <div class="produtos-stars">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>

                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>

                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                        </div>

                        <!-- preco -->
                        <strong class="produtos-preco">
                            € 49,90
                        </strong>
                    </article>
                    <!-- end itens do produto -->
                </a>
                <!-- end produtos -->

                <!-- produtos -->
                <a href="#" class="produtos-container col-md-3">
                    <!-- imagem do produto -->
                    <img src="images.jpg" class="img-fluid" alt="Jean Femme">

                    <!-- itens do produto -->
                    <article class="produtos-itens">
                        <!-- title produto -->
                        <h2>Jean Femme</h2>

                        <!-- stars -->
                        <div class="produtos-stars">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>

                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>

                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                        </div>

                        <!-- preco -->
                        <strong class="produtos-preco">
                            € 117,90
                        </strong>
                    </article>
                    <!-- end itens do produto -->
                </a>
                <!-- end produtos -->

            </article>
            <!-- listagem dos produtos -->

            <div class="d-flex justify-content-center">
                <a href="./camisetas.html" class="btn btn-warning col-md-2">REGARDER PLUS</a>
            </div>
        </section>
        <!-- end container produtos -->

</main>
<!-- end main -->

<!-- Footer -->
<?php include './header.footer/footer.php'; ?>
<!-- end Footer-->

<!-- Arquivos Bootstrap -->
    <script src="./assets/js/jquery.js"></script>
    <script src="./assets/js/popper.js"></script>
    <script src="./assets/js/bootstrap.js"></script>

</body>

</html>