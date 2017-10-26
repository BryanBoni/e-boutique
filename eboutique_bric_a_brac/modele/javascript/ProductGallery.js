var _ImageList = new Array("../ressources/testDetailProduct/pc1.jpg", "../ressources/testDetailProduct/pc2.jpg", "../ressources/testDetailProduct/pc3.jpg", "../ressources/testDetailProduct/pc4.jpg");
var _main = document.createElement("img");
var _gallery = document.createElement("div");

initGallery();

function initGallery() {
    makeGallery();
}

/**
 * 
 * @returns {undefined}
 */
function makeGallery() {
    var div = document.getElementById("productImage");

    _gallery.setAttribute("id", "PIL");//PIL = ProductImageList
    _main.setAttribute("id", "PILmain");
    _main.setAttribute("src", _ImageList[0]);

    _ImageList.forEach(function (item) {
        var PILitem = document.createElement("img");
        PILitem.setAttribute("class", "PILitem");
        PILitem.setAttribute("src", item);

        PILitem.addEventListener("mouseover", function (event) {
            _main.setAttribute("src", PILitem.getAttribute("src"));
        });

        _gallery.appendChild(PILitem);
    });

    div.appendChild(_main);
    div.appendChild(_gallery);
}