<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="UTF-8">
    <title>Dashboard LocalHost</title>

    <link rel='stylesheet prefetch'
          href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css'>
    <link rel='stylesheet prefetch'
          href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/font/material-design-icons/Material-Design-Icons.woff'>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

<?php include("nav.php"); ?>

    <!-- Contenu de l'icone Profil en haut a droite -->
<header>
   <?php include("header.php"); ?>
</header>

<!-- Conteneur géneral de la page  -->
<main>
    <?php if (isset($_GET['page']) && !empty($_GET['page'])):

        switch ($_GET['page']) {
            case "arbo":
                ?><iframe id="mainFrame" name="mainFrame" src="<?php echo $_GET['page']; ?>.php" width="100%" marginheight="0"
                          frameborder="0"></iframe>
                <?php
                break;
            case "documentation":
                ?><iframe id="mainFrame" name="mainFrame" src="<?php echo $_GET['page']; ?>.php" width="100%" marginheight="0"
                          frameborder="0"></iframe>
                <?php
                break;
            case "codepen":
                ?><iframe id="mainFrame" name="mainFrame" src="https://codepen.io/pen   " width="100%" marginheight="0"
                          frameborder="0"></iframe>
                <?php
                break;
            case "goo":
                ?><iframe id="mainFrame" name="mainFrame" src="https://goo.gl/" width="100%" marginheight="0"
                          frameborder="0"></iframe>
                <?php
                break;
            case "color":
                ?><iframe id="mainFrame" name="mainFrame" src="Ressource/Color Picker/" width="100%" marginheight="0"
                          frameborder="0"></iframe>
                <?php
                break;
        }
    ?>

    <?php else: ?>
       <?php include "dashboard.php"; ?>
    <?php endif; ?>

    <div class="fixed-action-btn click-to-toggle" style="bottom: 45px; right: 24px;">
        <a class="btn-floating btn-large indigo waves-effect waves-light">
            <i class="large material-icons">add</i>
        </a>
        <ul>
            <li>
                <a class="btn-floating red"><i class="material-icons">note_add</i></a>
                <a href="" class="btn-floating fab-tip">Créer un fichier</a>
            </li>
            <li>
                <a class="btn-floating yellow darken-1"><i class="material-icons">add_a_directory</i></a>
                <a href="" class="btn-floating fab-tip">Créer un dossier</a>
            </li>
        </ul>
    </div>
</main>

<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js'></script>

<script src="js/index.js"></script>

</body>
</html>
