<?php

$linkHead = "";
$linkFooter = "<script src=\"./modele/javascript/homeListModule.js\"></script>";
$home = 1;
$title = "Bienvenue sur Originally!";

$nbProduct = "";

$content = "";

//for($i = 0; $i < 10; $i++){
    $content = $content 
            . "<div id=\"row\">"
                . "<div id=\"frontPoster\" class=\"hidden-xs\">"
                    . "    
                        <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
                            <!-- Carousel indicators -->
                            <ol class=\"carousel-indicators\">
                                <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
                                <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
                                <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
                            </ol>   
                            <!-- Wrapper for carousel items -->
                            <div class=\"carousel-inner\">
                                <div class=\"item active\">
                                    <img src=\"/ressources/affiche.png\" alt=\"First Slide\">
                                </div>
                                <div class=\"item\">
                                    <img src=\"/ressources/affiche2.png\" alt=\"Second Slide\">
                                </div>
                                <div class=\"item\">
                                    <img src=\"https://i2.cdscdn.com/other/apercu-slide-2_170918101954.png\" alt=\"Third Slide\">
                                </div>
                            </div>
                            <!-- Carousel controls -->
                            <a class=\"carousel-control left\" href=\"#myCarousel\" data-slide=\"prev\">
                                <span class=\"glyphicon glyphicon-chevron-left\"></span>
                            </a>
                            <a class=\"carousel-control right\" href=\"#myCarousel\" data-slide=\"next\">
                                <span class=\"glyphicon glyphicon-chevron-right\"></span>
                            </a>
                        </div>"
                . "</div>"
            . "</div>"
            . "";
    
    

    $content = $content . ""
            . "<div id=\"topList\">"
                . "<div class=\"row\">"
                    . "<h2>Tendances</h2>"
                . "</div>"

                . "<hr />"
                . "<div class=\"row\">"
                    . "<div id=\"tendanceList\"></div>"
                . "</div>"
            . "</div>"
            . "<div id=\"topList\">"
                . "<div class=\"row\">"
                    . "<h2>Promos</h2>"
                . "</div>"

                . "<hr />"
                . "<div class=\"row\">"
                    . "<div id=\"promosList\"></div>"
                . "</div>"
            . "</div>"
            . "<div id=\"topList\">"
                . "<div class=\"row\">"
                    . "<h2>Dernière arrivage</h2>"
                . "</div>"

                . "<hr />"
                . "<div class=\"row\">"
                    . "<div id=\"daList\"></div>"
                . "</div>"
            . "</div>";    
//}


require_once (dirname(__FILE__) . "/vue/Layout.php");
?>
