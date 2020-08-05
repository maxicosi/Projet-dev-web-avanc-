<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        body {font-family: "Times New Roman", Georgia, Serif;}
        h1, h2, h3, h4, h5, h6 {
            font-family: "Playfair Display";
            letter-spacing: 5px;
        }
    </style>
    <title>Noob Cooking</title>
</head>


<body>
<!-- Navbar (sit on top) -->
<div class="w3-top">
    <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
        <a href="#home" class="w3-bar-item w3-button">Noob Cooking</a>
        <!-- Right-sided navbar links. Hide them on small screens -->
        <div class="w3-right w3-hide-small">
            <a href="#about" class="w3-bar-item w3-button">A Propos</a>
            <a href="#menu" class="w3-bar-item w3-button">Recettes</a>
            <a href="#contact" class="w3-bar-item w3-button">Contact</a>
        </div>
    </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
    <img class="w3-image" src="/w3images/hamburger.jpg" alt="Hamburger Catering" width="1600" height="800">
    <div class="w3-display-bottomleft w3-padding-large w3-opacity">
        <h1 class="w3-xxlarge">Noob Cooking</h1>
    </div>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

    <!-- About Section -->
    <div class="w3-row w3-padding-64" id="about">
        <div class="w3-col m6 w3-padding-large w3-hide-small">
        </div>

        <div class="w3-col m6 w3-padding-large">
            <h1 class="w3-center">A propos de Noob Cooking</h1><br>
            <p class="w3-large">Ce projet est réalisé par Arno Godart. Le but de ce projet est d'aider des étudiants ou des amateurs en cuisine à réaliser des recettes simples avec des ingrédients basiques.</p>
        </div>
    </div>

    <hr>

    <!-- Menu Section -->
    <div class="w3-row w3-padding-64" id="menu">
        <div class="w3-col l6 w3-padding-large">
            <h1 class="w3-center">Recettes</h1><br>
            <h4>Omelette</h4>
            <h5>Instructions</h5>
            <ol>
                <li>Battez les oeufs à la fourchette, salez et poivrez.</li>
                <li>Faites chauffer le beurre, versez-en un peu dans les oeufs et mélangez.<br>
                    Versez les oeufs dans la poêle à feu vif, baissez le feu et laissez cuire doucement en ramenant les bords de l'omelette au centre au fur et à mesure qu'ils prennent.</li>
                <li>Secouez un peu la poêle pour éviter que l'omelette n'attache, vérifiez la texture baveuse ou bien prise.</li>
                <li>Pliez l'omelette en deux et servez.</li>
            </ol>
        </div>
        <div class="w3-col l6 w3-padding-large">
        </div>
    </div>

    <hr>

    <!-- Contact Section -->
    <div class="w3-container w3-padding-64" id="contact">
        <h1>Contact</h1><br>
        <p>N'hésitez pas à me contacter à l'adresse mail suivante
        <address>
            <a href="mailto:webmaster@example.com">Arno Godart</a>.<br>
        </address>
        </p>

        <!-- Formulaire de mail à effectuer en PHP-->
        <form action="/action_page.php" target="_blank">
        </form>
    </div>

    <!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-32">
</footer>








</body>
</html>