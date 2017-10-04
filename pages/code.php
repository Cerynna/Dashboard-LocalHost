<?php
include "../inc/config.php";
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
    <div class="nav-wrapper teal darken-1">
        <div class="col s12">
            <a href="../?page=adminArbo" class="breadcrumb" target="_parent"> Admin</a>
            <a href="../?page=arbo" class="breadcrumb" target="_parent"> Home</a>
            <?php
            $exploreTab = $_GET['id'];
            $exploreTab = str_replace(MYDIR, "", $exploreTab);
            $explores = explode("/", $exploreTab);
            $i = 1;
            $lien = MYDIR;
            foreach ($explores as $explore) {
                if ($i != count($explores)) {
                    $lien .= $explore . "/";
                    echo "<a href=\"./arbo.php?explore=$lien\" class=\"breadcrumb\">$explore</a>";

                }
                $i++;
            }
            ?>
        </div>
    </div>
</nav>

<div class="row">
    <div class="col s12">
        <textarea class="lined" name="" id="" style="width: 100%; height: 700px;background-color: #FFFFFF;">
<?php

$codeSource = file_get_contents($_GET['id']);

echo $codeSource;
?>
</textarea>
    </div>
</div>

<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js'></script>
<script src="../inc/js/jquery-linedtextarea.js"></script>
<script>
    $(function () {
        $(".lined").linedtextarea(
            {selectedLine: 1}
        );
    });
</script>
</body>
</html>
