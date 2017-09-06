
listManager();


/**
 * Used to manage list creation on the home page. 
 * 
 */
function listManager() {
    listModule("tendanceList", 3);
    listModule("promosList", 2);
    listModule("daList", 6);
}

/**
 * Used to add a list on the selected div,
 * on the home page.
 * 
 * @param {type : String} listName
 * @param {type : int} nbElements
 */
function listModule(listName, nbElements) {
    var tendance = document.getElementById(listName);

    for (i = 0; i < nbElements; i++) {
        tendance.appendChild(listElementCreation(18, "http://lesobservateurs.ch/wp-content/uploads/2017/05/fake1.jpg", "FAKE NAME", "999.99")/*)*/);
    }
}

/**
 * used to create and define an element for an home list
 * 
 * @param {type : int} id
 * @param {type : String} img
 * @param {type : String} name
 * @param {type : float} price
 * @returns {Element|listElementCreation.productDiv}
 */
function listElementCreation(id, img, name, price) {
    var productDiv = document.createElement("div");
    productDiv.setAttribute("class", "col-xs-6 col-sm-4 col-md-3 col-lg-2");
    productDiv.setAttribute("id", "homeListElt");

    var productAddress = document.createElement("a");
    productAddress.setAttribute("href", "#?" + id);
    productAddress.setAttribute("class", "thumbnail");

    var productImg = document.createElement("img");
    productImg.setAttribute("src", img);
    productImg.setAttribute("atl", img);
    productAddress.appendChild(productImg);

    var productName = document.createElement("p");
    productName.appendChild(document.createTextNode(name));//temp
    productAddress.appendChild(productName);

    var productPrice = document.createElement("b");
    productPrice.setAttribute("style", "color: red;");
    productPrice.appendChild(document.createTextNode(price + " €"));//temp
    productAddress.appendChild(productPrice);

    productDiv.appendChild(productAddress);
    return productDiv;

}
