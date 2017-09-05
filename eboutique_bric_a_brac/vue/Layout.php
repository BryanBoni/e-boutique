<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="<?php if ($home == 1) {
    echo "";
} else {
    echo "../";
} ?>ressources/OG_icon.ico" type="image/gif">
        <title><?php echo $title ?></title>

        <!--Bootstrap & Jquery call -->
        <script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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
                            <td></td>
                            <td>
                                <form method="POST" action="#" id="searchBar">
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
                                    <a href="#"><table><tr><td><b>Panier </b></td> <td><b><span class="glyphicon glyphicon-shopping-cart"></span></b> </td> <td> <span class="badge" style="background-color: #ff6666;"><?php echo $nbProduct ?></span></td></tr></table></a>
                                </div>   
                            </td>

                            <td>
                                <div id="storeTool">
                                    <a href="#"><table><tr> <td><b>Mon</b></td> <td><b> compte </b></td> <td><b><span class="glyphicon glyphicon-user"></span></b> </td></tr></table></a>
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
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="#">OG</a>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Catégorie <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Electroménager</a></li>
                                            <li><a href="#">Mobilier</a></li>
                                            <li><a href="#">Bricolage</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="#">Informatique</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="#">Produits populaires</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Conseil client</a></li>
                                </ul>

                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="#">Contact</a></li>
                                    <form method="POST" action="#" class="navbar-form navbar-left hidden-sm hidden-lg hidden-md">
                                        <div class="input-group" style="margin: 0px 20px;">
                                            <input type="text" class="form-control" placeholder="Rechercher nos produits">
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn btn-warning"><b class="glyphicon glyphicon-search" aria-hidden="true"></b></button>
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

        <div id="footer">

        </div>            


        <?php echo $linkFooter ?>
        <script src="<?php if ($home == 1) { echo "";} else { echo "../";}?>modele/javascript/backOnTop.js"></script>
    </body>
</html>
