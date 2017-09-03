<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title ?></title>
        <?php $nbProduct = 2; ?>
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
        <div class="container-fluid">
            <div id="header">
                <div class="row hidden-xs" id="toolMenu">
                    <table>
                        <tr>
                            <td></td>
                            <td>
                                <form method="POST" action="#" id="searchBar">
                                    <b>
                                        <input type="search" id="searchBarText" placeholder="Rechercher nos produits"/>
                                        <button type="submit" id="searchBarButton"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
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
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="#">One more separated link</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Link</a></li>
                                </ul>

                                <ul class="nav navbar-nav navbar-right">
                                    <form class="navbar-form navbar-left hidden-sm hidden-lg hidden-md">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Search">
                                        </div>
                                        <button type="submit" class="btn btn-default"><b class="glyphicon glyphicon-search" aria-hidden="true"></b></button>
                                    </form>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                </div>
            </div>

            <div id="body">
                <div class="row">
                    <?php echo $content ?>
                </div>
            </div>

            <div id="footer">

            </div>            
        </div>
    </body>
</html>
