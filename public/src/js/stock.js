
// ----------- PLAIN JAVASCRIPT

// jebt wahed element dial HTML ( qty product)
let qtyElement
qtyElement = document.getElementById('qty')
let qty = qtyElement.value

// jebt wahed element dial HTML ( price product)
let priceElement
priceElement = document.getElementById('price-product')
let price = priceElement.value

// HNA an3tiw l HTML element dik l9ima
let majmo3Element
majmo3Element = document.getElementById('price-qty-product')
majmo3Element.value = qty * price

// Events Listeners
document.getElementById('qty').addEventListener("input", (event) => {
    // jebt wahed element dial HTML ( qty product)
    let qtyElement
    qtyElement = document.getElementById('qty')
    let qty = qtyElement.value

    // jebt wahed element dial HTML ( price product)
    let priceElement
    priceElement = document.getElementById('price-product')
    let price = priceElement.value

    // HNA an3tiw l HTML element dik l9ima
    let majmo3Element
    majmo3Element = document.getElementById('price-qty-product')
    majmo3Element.value = qty * price

})

// Events Listeners
document.getElementById('price-product').addEventListener("input", (event) => {
    // jebt wahed element dial HTML ( qty product)
    let qtyElement
    qtyElement = document.getElementById('qty')
    let qty = qtyElement.value


    // jebt wahed element dial HTML ( price product)
    let priceElement
    priceElement = document.getElementById('price-product')
    let price = priceElement.value


    // HNA an3tiw l HTML element dik l9ima
    let majmo3Element
    majmo3Element = document.getElementById('price-qty-product')
    majmo3Element.value = qty * price

})
