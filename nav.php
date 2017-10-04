<!-- Entete du menu de gauche avec $userName et logo -->
<ul id="slide-out" class="side-nav fixed z-depth-2">
    <li class="center no-padding">
        <div class="grey darken-2 white-text" style="height: 180px;">
            <div class="row">
                <img style="margin-top: 5%;" width="100" height="100" src="Ressource/linux.png" class="circle responsive-img"/>
                <p style="margin-top: -13%;">
                    Local BanBan
                </p>
            </div>
        </div>
    </li>
    <!-- Item dashboard -->
    <li id="dash_dashboard"><a class="waves-effect" href="index.php"><b>Dashboard</b></a></li>
    <!-- On déclare les listes déroulantes  -->
    <ul class="collapsible" data-collapsible="accordion">
        <!-- Item dossier -->
        <li id="dash_dossiers">
            <div id="dash_dossiers_header" class="collapsible-header waves-effect"><b>Vos dossiers</b></div>
            <div id="dash_dossiers_body" class="collapsible-body">
                <ul>
                    <li id="dossiers_dossier">
                        <a class="waves-effect" style="text-decoration: none;" href="#!"><i class="fa fa-folder-open" aria-hidden="true"></i> Nom du dossier</a>
                    </li>
                    <li id="dossiers_dossier">
                        <a class="waves-effect" style="text-decoration: none;" href="#!"><i class="fa fa-folder-open" aria-hidden="true"></i> Nom du dossier</a>
                    </li>
                </ul>
            </div>
        </li>
        <!-- Item Navigations -->
        <li id="dash_dir">
            <div id="dash_dir_header" class="collapsible-header waves-effect"><b>Navigation</b></div>
            <div id="dash_dir_body" class="collapsible-body">
                <ul>
                    <li id="dir_arbo">
                        <a class="waves-effect" style="text-decoration: none;" href="?page=arbo">Arborescence</a>
                    </li>

                    <li id="dir_Histo">
                        <a class="waves-effect" style="text-decoration: none;" href="?page=historique">Historique</a>
                    </li>
                </ul>
            </div>
        </li>
        <!-- Item liens utiles  -->
        <li id="dash_liens">
            <div id="dash_liens_header" class="collapsible-header waves-effect"><b>Liens utiles</b></div>
            <div id="dash_liens_body" class="collapsible-body">
                <ul>
                    <li id="liens_documentation">
                        <a class="waves-effect" style="text-decoration: none;" href="?page=documentation">Documentations</a>
                    </li>

                    <li id="liens_cdn">
                        <a class="waves-effect" style="text-decoration: none;" href="?page=cdn">CDN</a>
                    </li>
                </ul>
            </div>
        </li>
        <!-- Item de personnalisation -->
        <li id="dash_profils">
            <div id="dash_profils_header" class="collapsible-header waves-effect"><b>Personnalisation</b></div>
            <div id="dash_profils_body" class="collapsible-body">
                <ul>
                    <li id="profils_profil">
                        <a class="waves-effect" style="text-decoration: none;" href="themes.php">Thémes</a>
                        <a class="waves-effect" style="text-decoration: none;" href="profil.php">Profil</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</ul>