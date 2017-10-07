<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?php if ($home == 1) { echo "";} else { echo "../"; } ?>ressources/OG_icon.png" type="image/gif">
        <title><?php echo $title ?></title>

        <!--Bootstrap & Jquery call -->
        <script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" type="text/css" href="../vue/main.css">
        <?php echo $linkHead ?>
    </head>
    <body>
        <a href="#" class="back-to-top">Back to Top</a>

        <div id="header">
            <div class="container-fluid">
                <div class="row hidden-xs" id="toolMenu">
                        <table>
                            <tr>
                                <td style="width: fit-content; border: 1px black solid; padding: 10px;">
                                    <div style="">
                                        <a href="<?php if ($home == 1) { echo "";} else { echo "../"; } ?>index.php"  placeholder="Voir mon compte client"><b>Logo à venir</b> </a>
                                    </div>
                                </td>
                                <td>
                                    <div id="storeToolLeft">
                                        <a href="https://www.facebook.com/"  placeholder="Voir mon compte client"><b><img src="<?php if ($home == 1) { echo "";} else { echo "../"; } ?>ressources/Facebook_icon.svg.png"/></b> </a>
                                    </div>
                                </td>
                                <td>
                                    <form method="POST" action="../controlleur/searchPage.php" id="searchBar">
                                        <b>
                                            <table>
                                                <tr>
                                                    <td><input type="search" id="searchBarText" placeholder="Rechercher nos produits" aria-label="Rechercher nos produits"/></td>
                                                    <td><button type="submit" id="searchBarButton"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button></td>
                                                </tr>
                                            </table>
                                        </b>
                                    </form>
                                </td>
                                <td>
                                    <div id="storeTool">
                                        <a href="#" placeholder="Voir mon panier"><table><tr><td class="hidden-sm"><!--<b>Panier </b>--></td> <td><b><span class="glyphicon glyphicon-shopping-cart"></span></b> </td> <td> <span class="badge" style="background-color: #ff6666;"><?php echo $nbProduct ?></span></td></tr></table></a>
                                    </div>   
                                </td>

                                <td>
                                    <div id="storeTool" >
                                        <a href="#"  placeholder="Voir mon compte client"><table><tr> <td class="hidden-sm"><!--<b>Mon</b></td> <td class="hidden-sm"><b> compte </b>--></td> <td><b><span class="glyphicon glyphicon-user"></span></b> </td></tr></table></a>
                                    </div>   
                                </td>

                                <td>
                                    <div id="storeTool">
                                        <a href="#"><b><img src="../ressources/flags/Flags PNG/France.png" /></b></a>
                                    </div>   
                                </td>
                            </tr>
                        </table>
                    </div>

                <div class="row">
                    <nav class="navbar navbar-red">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button style="margin-right: 20px;" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="../index.php">OG</a>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                
                                <!-- on sm md and lg -->
                                <ul class="nav navbar-nav hidden-xs"><!-- navbar-nav -->
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Catégories <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="../controlleur/searchPage.php?QUO">Au quotidien</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="../controlleur/searchPage.php?AVOY">Accessoires de voyage</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="../controlleur/searchPage.php?VET">Vêtements</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="../controlleur/searchPage.php?L33T">Littérature touristique</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Top produits</a></li>
                                    <li><a href="#">Made in france</a></li>
                                    <!--<li><a href="#">Cartes cadeaux</a></li>-->
                                </ul>
                                <!-- on xs-->
                                <ul class="nav navbar-nav hidden-sm hidden-md hidden-lg" style="width: 100%;"><!-- navbar-nav -->
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Catégories <span class="caret"></span></a>
                                        <ul class="dropdown-menu" style=" text-align: center; ">
                                            <li ><a href="../controlleur/searchPage.php?QUO">Au quotidien</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="../controlleur/searchPage.php?AVOY">Accessoires de voyage</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="../controlleur/searchPage.php?VET">Vêtements</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="../controlleur/searchPage.php?L33T">Littérature touristique</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Top produits</a></li>
                                    <li><a href="#">Made in france</a></li>
                                    <!--<li><a href="#">Cartes cadeaux</a></li>-->
                                </ul>

                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="#">Contact</a></li>
                                    <form method="POST" action="#" class="navbar-form navbar-left hidden-sm hidden-lg hidden-md">
                                        <div class="input-group" style="margin: 0px 20px;">
                                            <input type="text" class="form-control" placeholder="Rechercher nos produits">
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn btn-primary"><b class="glyphicon glyphicon-search" aria-hidden="true"></b></button>
                                            </span>
                                        </div>
                                    </form>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                </div>
            </div>
        </div>

        <div id="body" class="container-fluid">
            <div class="row">
<?php echo $content ?>
            </div>
        </div>

        <div id="footer" class="container-fluid">
            <div class="row">
                <p>Ce site a été développé par <a>Bryan Boni</a> en collaboration avec <a>Andréas Ballis</a></p>
            </div>
        </div>            


<?php echo $linkFooter ?>
        <script src="<?php if ($home == 1) {
    echo "";
} else {
    echo "../";
} ?>modele/javascript/backOnTop.js"></script>
    </body>
</html>
