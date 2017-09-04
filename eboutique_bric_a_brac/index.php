<?php

$linkHead = "";
$linkFooter = "";
$home = 1;
$title = "Bienvenue sur Originally!";

$nbProduct = "";

$content = "";

for($i = 0; $i < 10; $i++){
    $content = $content 
            . "<div id=\"topList\">"
                . "<div id=\"row\">"
                    . "<h2>Tendances</h2>"
                . "</div>"

                . "<hr />"
                . "<div id=\"row\">"
                    . "<div id=\"tendanceList\"></div>"
                . "</div>"
            . "</div>"
            . "<div id=\"topList\">"
                . "<div id=\"row\">"
                    . "<h2>Promos</h2>"
                . "</div>"

                . "<hr />"
                . "<div id=\"row\">"
                    . "<div id=\"tendanceList\"></div>"
                . "</div>"
            . "</div>"
            . "<div id=\"topList\">"
                . "<div id=\"row\">"
                    . "<h2>Dernière arrivage</h2>"
                . "</div>"

                . "<hr />"
                . "<div id=\"row\">"
                    . "<div id=\"tendanceList\"></div>"
                . "</div>"
            . "</div>";    
}


require_once (dirname(__FILE__) . "/vue/Layout.php");
?>
