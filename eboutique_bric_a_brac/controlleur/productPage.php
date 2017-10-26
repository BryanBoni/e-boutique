<!--
-->
<?php
$title = "Bienvenue sur Originally!";
$linkFooter = "<script src=\"../modele/javascript/ProductGallery.js\"></script>";

$productImage = "https://img.audiofanzine.com/images/u/category/thumb2/casques-audio-944.jpg";
$productName = "ACER PC Portable Gamer Predator 21X - 21\" IPS";//"Nom du produit";
$productDescription = "Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500.";
$productPrice = "19.95";
$quantMin = 0;
$quantMax = 6;
$content = "";

$content = $content 
        . "<div class=\"row\">"
            . "<h1>$productName</h1>"
        . "</div>"
        . "<hr />"
        . "<div class=\"row\" id=\"productPage\">"
            . "<div class=\"col-sm-8 col-md-6 col-lg-4\" id=\"productImage\">"
                //. "<img src=\"$productImage\" />"
            . "</div>"
            
            
            . "<div class=\"col-sm-4 col-md-offset-2 col-md-4 col-lg-offset-4 col-lg-4\" id=\"productPrice\">"
                . "<div class=\"col-sm-12\" >"
                    . "<span id=\"money\">$productPrice €</span>"
                    . "<form action=\"#\" method=\"POST\">"
                        . "<div class=\"form-group\">"
                            . "<center><b>Quantité :</b>"
                            . "<input type=\"number\" id=\"quantity\" class=\"form-control\" name=\"quantity\" min=\"$quantMin\" max=\"$quantMax\" value=\"1\"></center>"
                            . "<br />"
                            . "<button type=\"submit\" class=\"btn btn-custom\"> Ajouter au panier </button>"
                        . "</div>"
                    . "</form>"
                . "</div>"
                . "<div class=\"col-sm-12\" id=\"productDesc\">$productDescription</div>"
            . "</div>"           
        . "</div>"

        . "<div id=\"row\"></div>";

require_once (dirname(dirname(__FILE__)) . "/vue/Layout.php");
