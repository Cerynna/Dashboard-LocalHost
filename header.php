<ul class="dropdown-content" id="user_dropdown">
    <li>
        <a class="grey-text" href="#!">Thèmes</a>
    </li>
    <li>
        <a class="grey-text" href="#!">Profil</a>
    </li>
</ul>
<!-- Menu top
<nav class="grey" role="navigation">
    <div class="nav-wrapper">
        <a data-activates="slide-out" class="button-collapse show-on-" href="#!"><img
                    style="margin-top: 17px; margin-left: 5px;"
                    src="https://res.cloudinary.com/dacg0wegv/image/upload/t_media_lib_thumb/v1463989873/smaller-main-logo_3_bm40iv.gif"/></a>

        <ul class="right hide-on-med-and-down">

            <li>
                <a class='right button' href=""><i class="fa fa-google"></i></i></a>
            </li>
            <li>
                <a class='right button' href=""><i class="fa fa-facebook"></i></i></a>
            </li>
            <li>
                <a class='right button' href=""><i class="fa fa-github"></i></i></a>
            </li>
            <li>
                <a class='right button' href=""><i class="fa fa-twitter"></i></i></a>
            </li>
            <li>
                <a class='right button' href=""><i class="fa fa-linkedin"></i></i></a>
            </li>
            <li>
                <a class='right button' href=""><i class="fa fa-youtube"></i></i></a>
            </li>
            <li>
                <a class='right dropdown-button' href='' data-activates='user_dropdown'><i class=' material-icons'>account_circle</i></a>
            </li>
        </ul>

        <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
    </div>
</nav>-->
<!-- Fil d'ariane -->
<nav>
    <div class="nav-wrapper grey darken-2">
        <a style="margin-left: 20px;" class="breadcrumb" href="index.php">Dashboard</a>
        <?php

        if (isset($_GET['page']) && !empty($_GET['page'])){
            switch ($_GET['page']) {
                case "arbo":
                    echo '<a class="breadcrumb" href="?page=arbo">Arborescence</a>';
                    break;
                case "documentation":
                    echo '<a class="breadcrumb" href="?page=documentation">Documentation</a>';
                    break;
                case "codepen":
                    echo '<a class="breadcrumb" href="?page=codepen">CodePen</a>';
                    break;
                case "goo":
                    echo '<a class="breadcrumb" href="?page=documentation">goo.gl</a>';
                    break;
                case "color":
                    echo '<a class="breadcrumb" href="?page=color">ColorPicker</a>';
                    break;
            }
        }
        ?>
        <div style="margin-right: 20px;" id="timestamp" class="right"></div>
    </div>
</nav>