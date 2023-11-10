<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garage V. Parrot</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <!-- Votre propre fichier CSS -->
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <!-- Barre de navigation -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="images/image.15U1C2.png" alt="Logo Garage V. Parrot">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Nos Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#vehicles">Véhicules d'Occasion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Carrousel d'images -->
        <div id="bannerCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-target="#bannerCarousel" data-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-target="#bannerCarousel" data-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-target="#bannerCarousel" data-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/alex-suprun-AHnhdjyTNGM-unsplash.jpg" class="d-block w-100" alt="image-1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/mathieu-renier-4WBvCqeMaDE-unsplash.jpg" class="d-block w-100" alt="image-2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/sahil-patel-7KFGoBwMCyI-unsplash.jpg" class="d-block w-100" alt="image-3">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#bannerCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#bannerCarousel" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </header>

<!-- Section Services -->
<section id="services" class="bg-light py-5">
    <div class="container">
        <h2 class="text-center">Nos Services</h2>
        <div class="owl-carousel services-carousel owl-theme">
            <!-- Service 1: Garage -->
            <div class="item">
                <a href="#" data-title="Garage" data-description="Description du service de garage">
                    <div class="item-wrapper">
                        <div class="item-image service-image" style="background-image: url(images/alex-suprun-AHnhdjyTNGM-unsplash.jpg)"></div>
                        <div class="item-caption">
                            <span class="title">Garage</span>
                            <span class="description">Service complet de garage automobile.</span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Service 2: Réparation Automobile -->
            <div class="item">
                <a href="#" data-title="Réparation Automobile" data-description="Description du service de réparation automobile">
                    <div class="item-wrapper">
                        <div class="item-image service-image" style="background-image: url('images/alex-suprun-AHnhdjyTNGM-unsplash.jpg');"></div>
                        <div class="item-caption">
                            <span class="title">Réparation Automobile</span>
                            <span class="description">Réparations professionnelles pour tous types de véhicules.</span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Service 3: Vente de Voiture d'Occasion -->
            <div class="item">
                <a href="#" data-title="Vente de Voiture d'Occasion" data-description="Description du service de vente de voiture d'occasion">
                    <div class="item-wrapper">
                        <div class="item-image service-image" style="background-image: url('images/alex-suprun-AHnhdjyTNGM-unsplash.jpg');"></div>
                        <div class="item-caption">
                            <span class="title">Vente de Voiture d'Occasion</span>
                            <span class="description">Large sélection de voitures d'occasion de haute qualité.</span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Service 4: Entretien de Véhicules -->
            <div class="item">
                <a href="#" data-title="Entretien de Véhicules" data-description="Description du service d'entretien de véhicules">
                    <div class="item-wrapper">
                        <div class="item-image service-image" style="background-image: url('images/alex-suprun-AHnhdjyTNGM-unsplash.jpg');"></div>
                        <div class="item-caption">
                            <span class="title">Entretien de Véhicules</span>
                            <span class="description">Programmes d'entretien régulier pour assurer la performance.</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

    <!-- Section Véhicules d'Occasion -->
    <section id="vehicles" class="bg-light py-5">
        <div class="container">
            <h2 class="text-center">Véhicules d'Occasion</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="images/vinicius-henrique-photography-Jx0XzHgPHhs-unsplash.jpg" class="card-img-top" alt="Véhicule 1">
                        <div class="card-body">
                            <h5 class="card-title">Modèle 1</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="images/samy-mounichy-eTuO9BNtcPA-unsplash.jpg" class="card-img-top" alt="Véhicule 2">
                        <div class="card-body">
                            <h5 class="card-title">Modèle 2</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="images/zhivko-minkov-5kIyOuHWl4U-unsplash.jpg" class="card-img-top" alt="Véhicule 3">
                        <div class="card-body">
                            <h5 class="card-title">Modèle 3</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Contact -->
    <section id="contact" class="py-5">
        <div class="container">
            <h2 class="text-center">Contactez-nous</h2>
            <div class="row">
                <div class="col-md-6">
                    <form>
                        <div class="form-group">
                            <label for="name">Nom</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Adresse</h5>
                            <p class="card-text">123 Rue du Garage, 31000 Toulouse</p>
                            <h5 class="card-title">Téléphone</h5>
                            <p class="card-text">+33 1 23 45 67 89</p>
                            <h5 class="card-title">Email</h5>
                            <p class="card-text">contact@garageparrot.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<script>
/* Initialise Owl Carousel*/
/* stylelint-disable-next-line */
jQuery(document).ready(function () {
    $(".services-carousel.owl-carousel").owlCarousel({
        loop: true,
        margin: 40,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 3,
                nav: true,
                loop: false
            }
        }
    });
});

</script>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- Votre script.js -->
<script src="script.js"></script>

</body>
</html>
