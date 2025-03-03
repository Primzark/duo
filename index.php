<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameTry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-dark">


    <nav class="navbar navbar-expand-lg bg-light mx-auto w-75 mt-3 rounded-4">
        <div class="container p-3">
            <a class="navbar-brand text-dark" href="#">GameTry</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="row w-100">
                    <div class="col text-center">
                        <a class="nav-link text-dark" href="index.php">
                            <i class="bi bi-house"></i> Accueil
                        </a>
                    </div>
                    <div class="col text-center">
                        <a class="nav-link text-dark" href="order.php">
                            <i class="bi bi-cart"></i> Commandes
                        </a>
                    </div>
                    <div class="col text-center">
                        <a class="nav-link text-dark" href="user.php">
                            <i class="bi bi-person"></i> Utilisateur
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>


    <div class="container-fluid bg-light py-5 w-75 mt-4 rounded-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="./animal_crossing_new_horizons.webp" class="img-fluid rounded" alt="Animal Crossing: New Horizons">
                </div>
                <div class="col-md-6">
                    <h1 class="display-4">Animal Crossing: New Horizons</h1>
                    <p class="fw-bold">Relaxant et créatif. Parfait pour se détendre après une longue journée.</p>
                    <button class="btn btn-primary btn-lg">En savoir plus</button>
                </div>
            </div>
        </div>
    </div>


    <div class="container mt-5 text-center">
        <h2 class="text-white">Catalogue de Jeux</h2>
        <div class="row">

            <div class="col-md-4 mb-4">
                <div class="card bg-light text-dark">
                    <img src="" class="card-img-top" alt="Animal Crossing: New Horizons">
                    <div class="card-body">
                        <h5 class="card-title">Animal Crossing: New Horizons</h5>
                        <p class="card-text">Relaxant et créatif. Parfait pour se détendre après une longue journée.</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#gameModal1">
                            Détails
                        </button>
                    </div>
                </div>

                <div class="modal fade" id="gameModal1" tabindex="-1" aria-labelledby="gameModalLabel1"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="bg-white text-dark">
                            <div class="modal-header">
                                <h5 id="gameModalLabel1">Animal Crossing: New Horizons</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="" class="img-fluid rounded mb-3" alt="Animal Crossing: New Horizons">
                                <p>Nom: Animal Crossing: New Horizons</p>
                                <p>Note: 4.5/5</p>
                                <p>Date de la note: 2025-01-15</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-4 mb-4">
                <div class="card bg-light text-dark">
                    <img src="" class="card-img-top" alt="Elden Ring">
                    <div class="card-body">
                        <h5 class="card-title">Elden Ring</h5>
                        <p class="card-text">Un RPG d'action dans un vaste monde dangereux.</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#gameModal2">
                            Détails
                        </button>
                    </div>
                </div>

                <div class="modal fade" id="gameModal2" tabindex="-1" aria-labelledby="gameModalLabel2"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="bg-white text-dark">
                            <div class="modal-header">
                                <h5 class="modal-title" id="gameModalLabel2">Elden Ring</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="" class="img-fluid rounded mb-3" alt="Elden Ring">
                                <p><span class="fw-2">Nom:</span> Elden Ring</p>
                                <p><span class="fw-2">Note:</span> 4.8/5</p>
                                <p><span class="fw-2">Date de la note:</span> 2025-02-10</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-4 mb-4">
                <div class="card bg-light text-dark">
                    <img src="" class="card-img-top" alt="Horizon Forbidden West">
                    <div class="card-body">
                        <h5 class="card-title">Horizon Forbidden West</h5>
                        <p class="card-text">Un jeu d'action-aventure dans un monde post-apocalyptique.</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#gameModal3">
                            Détails
                        </button>
                    </div>
                </div>

                <div class="modal fade" id="gameModal3" tabindex="-1" aria-labelledby="gameModalLabel3"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="bg-white text-dark">
                            <div class="modal-header">
                                <h5 class="modal-title" id="gameModalLabel3">Horizon Forbidden West</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="" class="img-fluid rounded mb-3" alt="Horizon Forbidden West">
                                <p><span class="fw-2">Nom:</span> Horizon Forbidden West</p>
                                <p><span class="fw-2">Note:</span> 4.7/5</p>
                                <p><span class="fw-2">Date de la note:</span> 2025-01-20</p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <footer class="bg-light mt-5 mx-auto w-75 rounded-4">
        <div class="container py-4">
            <div class="row">
                <div class="col-md-6">
                    <h5>GameTry</h5>
                </div>
                <div class="col-md-2">
                    <h5>Liens Rapides</h5>
                    <ul>
                        <li><a href="index.php" class="text-dark">Accueil</a></li>
                        <li><a href="order.php" class="text-dark">Panier</a></li>
                        <li><a href="user.php" class="text-dark">Utilisateur</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Contactez-nous</h5>
                    <ul>
                        <li><a href="#" class="text-dark text-decoration-none">Email: support@gametry.com</a></li>
                        <li><a href="#" class="text-dark text-decoration-none">Téléphone: 07 33 77 99 99</a></li>
                    </ul>
                </div>
            </div>
            <div>
                <p class="mb-0">© 2025. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>