<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script
            src="https://code.jquery.com/jquery-3.2.1.js"
            integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>


    <link rel="stylesheet" href="js/colorpickle/jquery.colorpickle.css"/>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/colorpickle/jquery.colorpickle.js"></script>


    <title>Color Picker</title>


</head>
<body>
<div class="container-fluid">
    <div class="row">


        <div class="col-md-4 round">
            <h1>ColorPicker</h1>

            <div id="colorPikerLeft"></div>


        </div>
        <div class="col-md-4 round">
            <h1>ImgPicker</h1>



            <iframe src="pickerImage.php" width="100%" height="660px" frameborder="0" scrolling="no"></iframe>


        </div>
        <div class="col-md-3 round">
            <h1>Convertor</h1>
            <iframe src="rgba.php" width="100%" height="660px" frameborder="0" scrolling="no"></iframe>


        </div>
    </div>

</div>


<small> By Hystérias</small>
<script>
    $(document).ready(function () {

        $("#colorPikerRight").colorpickle();

    });
    $(document).ready(function () {

        $("#colorPikerCenter").colorpickle();

    });
    $(document).ready(function () {

        $("#colorPikerLeft").colorpickle();

    });
</script>
<script>
    $("div").click(function () {
        var color = $(this).css("background-color");
        $("#result").html("That div is <span style='color:" +
            color + ";'>" + color + "</span>.");
    });
</script>


</body>
</html>