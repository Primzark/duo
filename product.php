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
            <a class="navbar-brand text-dark" href="index.php">GameTry</a>
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


    <div class="container mt-5 bg-light text-dark rounded-4">
        <div class="row">

            <div class="col-6">
                <img src="assets/img/jeux/animal_crossing_new_horizons.webp" class="img-fluid rounded"
                    alt="Animal Crossing: New Horizons">
            </div>

            <div class="col-6 p-3">
                <h1 class="display-4">Animal Crossing: New Horizons</h1>

                <p class="fw-bold">Console: Nintendo Switch</p>

                <p class="fs-4 text-decoration-underline">Prix: 59,99 €</p>

                <p class="fs-4">Description: Un jeu de simulation de vie où vous construisez votre île de rêve.</p>

                <button class="btn btn-outline-danger btn-lg">
                    <i class="bi bi-heart"></i> Favori
                </button>

                <button class="btn btn-primary btn-lg ms-2">
                    <i class="bi bi-cart"></i> Ajouter au Panier
                </button>
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