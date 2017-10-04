<?php

$documentationsFront = [
        "bootstrap" => "https://goo.gl/03ur8",
        "materialize" => "https://goo.gl/KG4C6v",
        "css" => "https://goo.gl/7NpKlG",
        "html" => "https://goo.gl/nmK9OF",
        "scss" => "",
        "sass" => "",
        "jquery" => "https://goo.gl/XRcJZ5",
        "javascript" => "https://goo.gl/dC2eqD",
        "vue.js" => "https://goo.gl/tyqG15",
];

$documentationsBack = [
        "Php" => "https://goo.gl/qUbLVP",
        "SQL" => "",
        "mysql" => "",
        "apache" => "",
        "node.js" => "",
        "Ubuntu" => "",
];


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
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>


<body>

<div class="row">
<!-- Front end -->
    <div class="col s6">
        <div style="padding: 35px;" align="center" class="card">
            <div class="row">
                <div class="left card-title">
                    <h4>Front-end</h4>
                </div>
            </div>

            <div class="row">
                <div class="containDoc">
                    <?php foreach($documentationsFront as $key => $documentation):   ?>
                        <a href="<?php echo $documentation ?>" target="_blank">
                            <div style="padding: 30px; margin: 30px; box-shadow: 0px 1px 3px;" class="grey lighten-3 col s3 waves-effect">
                                <p class="grey-text text-lighten-1">
                                    <h5 style="color: dimgray;"><?php echo $key ?></h5>
                                </p>
                            </div>
                        </a>
                    <?php  endforeach;  ?>
                </div>
            </div>
        </div>
    </div>
<!-- Back end -->
    <div class="col s6">
        <div style="padding: 35px;" align="center" class="card">
            <div class="row">
                <div class="left card-title">
                    <h4>Back-end</h4>
                </div>
            </div>

            <div class="row">
                <div class="containDoc">
                    <?php foreach($documentationsBack as $key => $documentation):   ?>
                        <a href="<?php echo $documentation ?>" target="_blank">
                            <div style="padding: 30px; margin: 30px; box-shadow: 0px 1px 3px;" class="grey lighten-3 col s3 waves-effect">
                                <p class="grey-text text-lighten-1">
                                <h5 style="color: dimgray;"><?php echo $key ?></h5>
                                </p>
                            </div>
                        </a>
                    <?php  endforeach;  ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js'></script>

<script src="js/index.js"></script>

</body>
</html>