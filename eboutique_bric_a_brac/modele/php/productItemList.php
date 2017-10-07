<?php

class productItemList {

    public $_name;
    public $_price;
    public $_promoPrice; //if there is one
    public $_description;
    public $_eval; //if there is one
    public $_imageUrl;
    
    /**
     * 
     * @param type $_name
     * @param type $_price
     * @param type $_promoPrice : -1 if there is none
     * @param type $_description
     * @param type $_eval : -1 if there is none
     * @param type $_imageUrl
     */
    public function __construct($_name, $_price, $_promoPrice, $_description, $_eval, $_imageUrl) {
        $this->_name = $_name;
        $this->_price = $_price;
        $this->_promoPrice = $_promoPrice;
        $this->_description = $_description;
        $this->_eval = $_eval;
        $this->_imageUrl = $_imageUrl;
    }


    public function display(){
        $content = ""
                    . "<div id=\"product\" class=\"col-sm-3 col-lg-2\">"
                        . "<div id=\"productWarper\">"
                            . "<a href=\"../controlleur/productPage.php\" >"
                                . "<div class=\"row\" style=\"\">"
                                    . "<h3 style=\"color: black;\">$this->_name</h3>"
                                    //. "<div class=\"col-sm-2\" >"
                                    . "<img src=\"$this->_imageUrl\" />"
                                    //. "</div>
                                    . "<hr />"
                                    . "<div id=\"productRating\">"
                                        . "<span class=\"fa fa-star\"> </span>"
                                        . "<span class=\"fa fa-star\"> </span>"
                                        . "<span class=\"fa fa-star\"> </span>"
                                        . "<span class=\"fa fa-star-half-o\"> </span>"
                                        . "<span class=\"fa fa-star-o\"> </span>"
                                    . "</div>"
                                    . "<h4><b class=\"productPrice\">$this->_price €</b></h4>"
                                . "</div>"
                            . "</a>"
                        . "</div>"
                    . "</div>"
                . "</a>";
        return $content;
    }
}