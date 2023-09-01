<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site d'une ecole</title>
</head>
<style>
    .carousel-image {
        width: 1020px; /* Ajuster la largeur de l'image en fonction de la largeur du conteneur parent */
        height: 500px; /* Maintenir le rapport d'aspect de l'image */
    }
</style>

<body>
@include('partials.navbar')
<br>
<!-- ---------------- -->
<div class="container mt-4 m-auto">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner m-auto">
            <div class="carousel-item active">
                <img src="{{ asset('images/slide2.jpg') }}" class="carousel-image" alt="Slide 1">
                <div class="carousel-caption">
                    <h3 class="fs-2 mt-5  fw-bold text-light">L'union fait la force</h3>
                    <p class="mt-3 text-light">Si on veut aller loin, marchons ensemble!!!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/slide2.jpg') }}" class="carousel-image" alt="Slide 2">
                <div class="carousel-caption">
                    <h3>Titre du Slide 2</h3>
                    <p>Description du Slide 2</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/slide3.jpg') }}" class="carousel-image" alt="Slide 2">
                <div class="carousel-caption">
                    <h3>Titre du Slide 2</h3>
                    <p>Description du Slide 2</p>
                </div>
            </div>        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

    
</body>
</html>