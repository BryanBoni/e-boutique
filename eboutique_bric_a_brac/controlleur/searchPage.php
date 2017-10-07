<!--
-->
<?php
include_once (dirname(dirname(__FILE__)) . "/modele/php/productItemList.php");

$title = "Bienvenue sur Originally!";
$home = 0;
$nbProduct = "";
$linkHead = "";
$linkFooter = "";
$productItemList = new productItemList("Fake name", 19.95, -1, "", -1, "https://images-na.ssl-images-amazon.com/images/I/81RMoKinLJL._SL1500_.jpg");

$content = "";

$content = $content 
        . "<div id=\"row\">"
            . "<h2>Votre recherche</h2>"
        . "</div>"
        . "<hr />"
        . "<div id=\"row\">"
            . ""
            . "<div id=\"productList\">"
                . "";

for($i = 0; $i < 10; $i++){
    $content .= $productItemList->display();
}

$content = $content
                . ""
            . "</div>"
            . ""
        . "</div>";

require_once (dirname(dirname(__FILE__)) . "/vue/Layout.php");