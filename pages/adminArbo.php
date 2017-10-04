<?php
if (isset($_GET['desc'])) {
    $arrayDir = unserialize(file_get_contents("../arrayDir.php"));
    $id = $_GET['desc'];
    $arrayDir[$id]['desc'] =  $_POST['desc'] ;
    $result = serialize($arrayDir);
    $results = $result;
    $file = fopen("../arrayDir.php", "r+");
    fwrite($file, $results);
    fclose($file);
    header('Location: adminArbo.php');

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
    <link rel="stylesheet" href="../inc/css/jquery-linedtextarea.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
<div class="row">
    <div class="col s6">
        <div class="card" style="padding: 35px;">
            <h5>Dossier</h5>
            <ul class="collection">
                <?php
                $arrayDir = unserialize(file_get_contents("../arrayDir.php"));
                foreach ($arrayDir as $key => $items):
                    $roots = explode("/", $items['way']);
                    $nbRoot = count($roots) - 2;
                    $way = str_replace("../myDossier/", "", $items['way']);
                    ?>
                    <li class="collection-item">
                        <form action="?desc=<?php echo $key; ?>" method="post" role="form">
                            <h6><?php echo $roots[$nbRoot]; ?></h6>
                            <label for="desc-<?php echo $key; ?>"><?php echo $way ; ?></label><br/>
                            <input type="text" name="desc" id="desc-<?php echo $key; ?>"
                                   value="<?php echo ($items['desc'] != "0") ? $items['desc'] : "";  ?>"
                                   onblur="this.form.submit();">
                        </form>
                    </li>
                    <?php
                endforeach;
                ?>
            </ul>
        </div>
    </div>
    <div class="col s6">
        <div class="card">
            <h5>Debugger</h5>
            <textarea class="lined" name="" id="" style="width: 100%; height: 600px;background-color: #FFFFFF;"><?php
                $arrayDir = unserialize(file_get_contents("../arrayDir.php"));
                print_r($arrayDir);
                ?></textarea>
        </div>
    </div>
</div>


<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js'></script>

<script src="../inc/js/index.js"></script>
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
