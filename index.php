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
    <link rel="stylesheet" href="inc/css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>


<body>

<!-- Entete du menu de gauche avec $userName et logo -->
<?php include("pages/nav.php"); ?>

<!-- Contenu de l'icone Profil en haut a droite -->
<header>
    <?php include("pages/header.php"); ?>
</header>

<!-- Conteneur géneral de la page  -->
<main>

    <?php if (isset($_GET['page']) && !empty($_GET['page'])):

        switch ($_GET['page']) {
            case "arbo":
                ?>
                <iframe id="mainFrame" name="mainFrame" src="pages/<?php echo $_GET['page']; ?>.php" width="100%"
                        marginheight="0"
                        frameborder="0"></iframe>
                <?php
                break;
            case "documentation":
                ?>
                <iframe id="mainFrame" name="mainFrame" src="pages/<?php echo $_GET['page']; ?>.php" width="100%"
                        marginheight="0"
                        frameborder="0"></iframe>
                <?php
                break;
            case "adminArbo":
                ?>
                <iframe id="mainFrame" name="mainFrame" src="pages/<?php echo $_GET['page']; ?>.php" width="100%"
                        marginheight="0"
                        frameborder="0"></iframe>
                <?php
                break;
            case "codepen":
                ?>
                <iframe id="mainFrame" name="mainFrame" src="https://codepen.io/pen" width="100%" marginheight="0"
                        frameborder="0"></iframe>
                <?php
                break;
            case "goo":
                ?>
                <iframe id="mainFrame" name="mainFrame" src="https://goo.gl/" width="100%" marginheight="0"
                        frameborder="0"></iframe>
                <?php
                break;
            case "color":
                ?>
                <iframe id="mainFrame" name="mainFrame" src="inc/colorPicker/" width="100%" marginheight="0"
                        frameborder="0"></iframe>
                <?php
                break;

        }


        ?>


    <?php else: ?>
        <?php include "pages/dashboard.php"; ?>
    <?php endif; ?>


</main>
<?php include "pages/footer.php"; ?>

