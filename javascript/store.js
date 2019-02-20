var removeCartItemButtons = document.getElementsByClassName('btn-danger')
for(var i=0; i<removeCartItemButtons.length; i++){
    var button = removeCartItemButtons[i];
    button.addEventListener('click',function(event){
        var buttonClicked = event.target
        buttonClicked.parentElement.parentElement.remove()
        updateCartTotal()
    })
}

let Product = class {
    constructor(name, quantity, price) {
        this.name = name;
        this.quantity = quantity;
        this.price = price;
    }
}

var totalprice = 0;
var products = [];

// Add item to cart 

var addItemButtons = document.querySelectorAll('input[value="Add to Cart"]');
for (var i=0; i<addItemButtons.length; i++) {
    var button = addItemButtons[i];
    button.addEventListener('click', function(event) {
        console.log(event.target.parentElement.childNodes);
        var priceText = event.target.parentElement.childNodes[1].innerText;
        console.log(priceText);
        priceText = priceText.substring(1);
        console.log(priceText);
        var price = parseFloat(priceText);
        var qty = event.target.parentElement.childNodes[5].childNodes[3].selectedIndex + 1;
        var product = event.target.parentElement.parentElement.parentElement.parentElement.childNodes[3].innerText;
        if (products.some(x => x.name === product)) {
            //var index = products.indexOf(product);
            var oldProduct = products.find( x => x.name === product);
            oldProduct.quantity += qty;
            oldProduct.price += qty * price;
            //console.log(products[index]);
        }
        else {
            var newProduct = new Product(product, qty, price*qty);
            //console.log(newProduct);
            products.push(newProduct);
        }
        updateCart();
        console.log(products);
    })
}

function removeFromCart(event) {
    prod = event.target.parentElement.parentElement.childNodes[1].childNodes[0].data;
    products = products.filter(function(x) { return x.name != prod;});
    console.log(products);
    updateCart();
}

function updateCart() {
    var table = document.getElementById("myTable");
    var tbody = table.getElementsByTagName("tbody")[0];
    $("#myTable tbody").empty();
    totalprice = 0;
    for (var i = 0; i < products.length; i++) {
        var row = tbody.insertRow(i);
        //var row = table.insertRow();
        var removeCell = row.insertCell(0);
        var nameCell = row.insertCell(1);
        var qtyCell = row.insertCell(2);
        var priceCell = row.insertCell(3);

        removeCell.innerHTML = "<a>x</a>"
        removeCell.addEventListener("click", removeFromCart);
        nameCell.innerHTML = products[i].name;
        qtyCell.innerHTML = products[i].quantity;
        priceCell.innerHTML = "$" + Number(products[i].price.toFixed(2));
        totalprice += Number(products[i].price.toFixed(2));
    }
    var totalElem = document.getElementsByClassName("cart-total-price")[0];
    totalElem.innerHTML = "$" + totalprice.toFixed(2);
}

function updateCartTotal(){
    var cartItemContainer = document.getElementsByClassName('cart-catagory')[0]
    var cartRows = cartItemContainer.getElementsByClassName('cart-row')
    var total = 0
    for(var i=0; i<cartRows.length; i++){
        var cartRow = cartRows[i]
        var priceElement = cartRow.getElementsByClassName('cart-price')[0]
        var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0]
        var price = parseFloat(priceElement.innerText.replace('$',''))
        var quantity = quantityElement.value
        total =total+(price*quantity)
        console.log(price*quantity)
    }
}