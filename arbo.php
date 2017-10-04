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

<?php

function exploreDir($dir, &$fichier)
{
// Ouvre un dossier bien connu, et liste tous les fichiers
    if (is_dir($dir)) {
        if ($dh = opendir($dir)) {
            $i = 0;
            while (($file = readdir($dh)) !== false) {
                if ($file != '.' && $file != '..' && $file != '.git' && $file != '.idea') {
                    if (filetype($dir . $file) === "dir") {
                        echo "<a href=\"?explore=$dir$file\" class=\"collection-item\"> <i class=\"material-icons\">folder</i> $file</a>" . "\n";

                    }
                    if (filetype($dir . $file) === "file") {
                        $fichier[$i]['name'] = $file;
                        $fichier[$i]['path'] = $dir . $file;


                    }


                }
                $i++;
            }
            closedir($dh);


        }
    }

}


?>
<nav>
    <div class="nav-wrapper teal darken-1">
        <div class="col s12">
            <a href="?explore=" class="breadcrumb"> <i class="material-icons" style="margin-left: 20px;">home</i></a>
            <?php

            $exploreTab = $_GET['explore'];

            $exploreTab = str_replace("./myDossier/", "", $exploreTab);

            $lien = "./myDossier/";
            $explores = explode("/", $exploreTab);

            for ($i = 0; $i <= (count($explores) - 1); $i++) {
                $lien .= $explores[$i];

                if ($lien !== "./myDossier/") {
                    echo "<a href=\"?explore=$lien\" class=\"breadcrumb\">$explores[$i]</a>";

                }


            }
            ?>
        </div>
    </div>
</nav>
<?php


if (!empty($_GET['explore'])) {
    $arbo = $_GET['explore'] . "/";
} else {
    $arbo = "./myDossier/";
}

?>

<div class="row">
    <div class="col s6">
        <div style="padding: 35px;" class="card">

            <div class="row">
                <h5>Dossiers</h5>
                <div class="collection">

                    <?php exploreDir($arbo, $sousDossier); ?>


                </div>
            </div>
        </div>
    </div>

    <div class="col s6">
        <div style="padding: 35px;" class="card">

            <ul class="row">
                <h5>Fichiers</h5>
                <ul class="collapsible" data-collapsible="accordion">
                    <?php

                    foreach ($sousDossier as $dossier) {


                        ?>

                        <li>
                            <div class="collapsible-header"><i class="material-icons">insert_drive_file</i>
                                <?php echo $dossier['name']; ?></div>
                            <div class="collapsible-body">



                                <span>
                                    <a class="waves-effect waves-light btn" href="<?php echo $dossier['path']; ?>"><i
                                                class="material-icons">add_to_queue</i></a>
                                    <a class="waves-effect waves-light btn" href="<?php echo $dossier['path']; ?>"
                                       target="_blank"><i class="material-icons">aspect_ratio</i></a>
                                </span>
                            </div>
                        </li>

                    <?php }
                    ?>
                </ul>

        </div>
    </div>
</div>


<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js'></script>

<script src="js/index.js"></script>

</body>
</html>