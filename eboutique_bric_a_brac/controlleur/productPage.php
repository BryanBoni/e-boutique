<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$title = "Bienvenue sur Originally!";

$productImage = "https://img.audiofanzine.com/images/u/category/thumb2/casques-audio-944.jpg";
$productName = "Nom du produit";
$productDescription = "Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500.";
$productPrice = "19.95";

$content = "";

$content = $content 
        . "<div class=\"row\">"
            . "<h1>$productName</h1>"
        . "</div>"
        . "<hr />"
        . "<div class=\"row\">"
            . "<div class=\"col-sm-4\" id=\"productImage\"><img src=\"$productImage\" /></div>"
            . "<div class=\"col-sm-4\" id=\"productDesc\">$productDescription</div>"
            . "<div class=\"col-sm-4\" id=\"productPrice\">"
                . "$productPrice €"
            . "</div>"
        . "</div>"

        . "<div id=\"row\"></div>";

require_once (dirname(dirname(__FILE__)) . "/vue/Layout.php");
