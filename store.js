if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}

function ready() {
    var removeCartItemButtons = document.getElementsByClassName('btn btn-danger')
    for (var i = 0; i < removeCartItemButtons.length; i++) {
        var button = removeCartItemButtons[i]
        button.addEventListener('click', removeCartItem)
    }

    var quantityInputs = document.getElementsByClassName('cart-quantity-input')
    for (var i = 0; i < quantityInputs.length; i++) {
        var input = quantityInputs[i]
        input.addEventListener('change', quantityChanged)
    }

    var addToCartButtons = document.getElementsByClassName('shop-item-button')
    for (var i = 0; i < addToCartButtons.length; i++) {
        var button = addToCartButtons[i]
        button.addEventListener('click', addToCartClicked)
    }


}

function purchaseClicked() {
    alert('Thank you for your purchase')
    var cartItems = document.getElementsByClassName('shoping__cart__table')[0]
    while (cartItems.hasChildNodes()) {
        cartItems.removeChild(cartItems.firstChild)
    }
    updateCartTotal()
}

function removeCartItem(event) {
    var buttonClicked = event.target
    buttonClicked.parentElement.parentElement.remove()
    updateCartTotal()
}

function quantityChanged(event) {
    var input = event.target
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1
    }
    updateCartTotal()
}

function addToCartClicked(event) {
    var button = event.target
    var shopImg = button.parentElement.parentElement.parentElement.getAttribute('data-setbg')
    var shopItem = button.parentElement.parentElement.parentElement.parentElement.childNodes[3]
    var title = shopItem.getElementsByClassName('shop-item-title')[0].innerText
    var price = shopItem.getElementsByClassName('shop-item-price')[0].innerText
    addItemToCart(title, price, shopImg)
    console.log(title, price)
    updateCartTotal()
}



function addItemToCart(title, price, shopImg) {

    var cartRow = document.createElement('div')
    cartRow.classList.add('cart-row')
    var cartItems = document.getElementsByClassName('shoping__cart__table')[0]
    var cartItemNames = cartItems.getElementsByClassName('shoping__cart__item')
    for (var i = 0; i < cartItemNames.length; i++) {
        if (cartItemNames[i].innerText == title) {
            alert('This item is already added to the cart')
            return
        }
        var cartRowContents = `
        
        <div class="shoping__cart__table">
        <tr><td class="shoping__cart__item">
        <img class = "cart_image" src="${shopImg}" alt="">
        <h5> ${title}</h5>
        </td>
        <td class="shoping__cart__price">${price}</td>
        <td class="shoping__cart__quantity">
         <div class="quantity">
         <div class="pro-qty">
         <input class="cart-quantity-input " type="text" value="1">
         </div>
        </div>
        </td>                                   
        <td>
        <button class="btn btn-danger" type="button"><span class="icon_close"></span></button> 
        </td>
        </tr>
        </div>`


        shoping__cart__table.innerHTML = cartRowContents
        cartItems.append(shoping__cart__table)
        cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click', removeCartItem)
        cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', quantityChanged)
    }
}



function updateCartTotal() {
    var cartItemContainer = document.getElementsByClassName('shoping__cart__table')[0]
    var cartRows = cartItemContainer.getElementsByClassName('cart-row')
    var total = 0
    for (var i = 0; i < cartRows.length; i++) {
        var cartRow = cartRows[i]
        var priceElement = cartRow.getElementsByClassName('shoping__cart__price')[0]
        var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0]
        var price = parseFloat(priceElement.innerText.replace('$', ''))
        var quantity = quantityElement.value
        total = total + (price * quantity)
    }
    total = Math.round(total * 100) / 100
    document.getElementsByClassName('cart-total-price')[0].innerText = '$' + total
}