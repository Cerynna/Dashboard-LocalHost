<?php

include "../inc/config.php";

function exploreDir($dir, &$fichier)
{
    if (is_dir($dir)) {
        if ($dh = opendir($dir)) {
            $i = 0;
            while (($file = readdir($dh)) !== false) {
                if ($file != '.' && $file != '..' && $file != '.git' && $file != '.idea') {
                    if (filetype($dir . $file) === "dir") {
                        $link = str_replace("//", "/", "$dir$file/");
                        $arrayDir = unserialize(file_get_contents("../arrayDir.php"));
                        $desc = "";
                        foreach ($arrayDir as $key => $items) {
                            //echo $items['way'] . "===" . $link . " - " .$items['desc'] . "<br>";
                            if ($items['way'] === $link && $items['desc'] != "0") {
                                $desc = $items['desc'];
                            }
                        }
                        ?>
                        <a href="?explore=<?php echo $link; ?>"
                            <?php if ($desc !== "") : ?>
                                class="collection-item tooltipped"
                                data-position="bottom" data-delay="50" data-tooltip="<?php echo $desc; ?>"
                            <?php else : ?>
                                class="collection-item"
                            <?php endif; ?>
                        > <i
                                    class="material-icons">folder</i>
                            <?php
                            $name = $file;
                            $name = str_replace("_", " ", $name);
                            echo ucfirst(strtolower($name));
                            ?>
                        </a>
                        <?php
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
    <link rel="stylesheet" href="../inc/css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../inc/css/jquery-linedtextarea.css" type="text/css" rel="stylesheet"/>
</head>

<body>


<nav class="flat">
    <div class="nav-wrapper">
        <div class="col s12">
            <a href="../?page=adminArbo" class="breadcrumb" target="_parent"> Admin</a>
            <a href="../?page=arbo" class="breadcrumb" target="_parent"> Home</a>
            <?php
            $exploreTab = $_GET['explore'];
            $exploreTab = str_replace(MYDIR, "", $exploreTab);
            $exploreTab = str_replace("//", "", $exploreTab);
            $lien = MYDIR;
            $explores = explode("/", $exploreTab);

            foreach ($explores as $explore) {
                if ($i != count($explores)) {
                    //echo $explore . " - ";
                    $lien .= $explore . "/";
                    if (!empty($explore) && $explore != "" && $explore != NULL && $explore != " ") {
                        echo '<a href="?explore=' . $lien . '" class="breadcrumb">' . $explore . '</a>' . PHP_EOL;
                    }

                }
                $i++;
            }
            ?>
        </div>
    </div>
</nav>
<?php
if (!empty($_GET['explore'])) {
    $arbo = $_GET['explore'] . "/";
} else {
    $arbo = MYDIR;
}
?>


<div class="row">
    <div class="col s6">
        <div style="padding: 35px;" class="card">

            <div class="row">
                <h5><a class="btn-floating red"><i class="material-icons">create_new_folder</i></a> Dossiers</h5>
                <div class="collection">
                    <?php
                    $arbo = str_replace("//", "/", $arbo);
                    exploreDir($arbo, $sousDossier);
                    ?>
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
                                    <a class="waves-effect waves-light btn"
                                       href="code.php?id=<?php echo $dossier['path']; ?>"
                                    ><i class="material-icons">settings_ethernet</i></a>
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
<div class="row">
    <div class="col s12">
        <?php
        $arrayDir = unserialize(file_get_contents("../arrayDir.php"));
        $id = (count($arrayDir) + 1);
        if ($arbo != MYDIR) {
            $arrayDir[$id]['way'] = "$arbo";
            $arrayDir[$id]['desc'] = 0;
        }
        $arrayDir = array_map("unserialize", array_unique(array_map("serialize", $arrayDir)));
        $i = 0;
        foreach ($arrayDir as $directory) {
            $result[$i] = $directory;
            $i++;
        }
        $result = array_map("unserialize", array_unique(array_map("serialize", $result)));
        $file = fopen("../arrayDir.php", "r+");
        $results = serialize($result);
        fwrite($file, $results);
        fclose($file);
        ?>
    </div>
</div>

<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js'></script>

<script src="../inc/js/index.js"></script>

</body>
</html>