var itemblocks = document.getElementsByClassName("itemBlock");

var clickHandler = function() {
    console.log(this.getAttribute("detail"));
}

for (var i = 0; i < itemblocks.length; i++) {
    itemblocks[i].addEventListener("click", clickHandler, false);
}