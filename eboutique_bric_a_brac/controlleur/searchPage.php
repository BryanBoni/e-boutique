<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>
                <div class="row hidden-xs" id="toolMenu">
                    <div class="col-sm-3">
                        
                    </div>
                    <div class="col-sm-5" style="margin: 0px; padding: 0px; /*width: fit-content;*/">
                        <form method="POST" action="#" id="searchBar">
                            <b>
                                <input type="search" id="searchBarText" placeholder="Rechercher nos produits"/>
                                <button type="submit" id="searchBarButton"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                            </b>
                        </form>
                    </div>
                    <div class="col-sm-3" style="margin: 0px; padding: 0px; /*width: fit-content;*/">
                        <div id="storeTool">
                            <a href="#"><b>Panier <span class="glyphicon glyphicon-shopping-cart"></span></b> <span class="badge" style="background-color: #ff6666;"><?php echo $nbProduct ?></span> </a>
                        </div>   
                    </div>
                    
                    <div class="col-sm-1" style="margin: 0px; padding: 0px; /*width: fit-content;*/">
                        <div id="storeTool">
                            <a href="#"><b><img src="../ressources/flags/Flags PNG/France.png" /></b></a>
                        </div>   
                    </div>

                </div>
