var cartProgram = $(function(){

var cart={
  add: addItem,
  remove: removeItem
}

// adds an item to the cart
function addItem (name, quantity) {
  if(cart[name] == undefined) {
    createItem(name);
  }
  cart[name] =  cart[name] + quantity;
}

function createItem(name) {
  cart[name] = 0;
}

// subtracts an item
function  removeItem(name, quantity) {
  if(cart[name] > 0) {
    cart[name] = cart[name] - quantity;
  }
}

function addOrUpdate(className) {
  var cartItem = $('ul.cart .' + className);
  if (cartItem.length === 0) {
    cartItem = $('<li>');
    cartItem.addClass(className);
    cartUl.append(cartItem);
  }
  cartItem.text(className +': ' +cart[className]);
}

function onProductClick(event){
  var productName = this.parentElement.className;

  cart.add(productName, 1);

  addOrUpdate(productName);
  console.log(cart);
}

var productButtons = $('ul.products button');

productButtons.click(onProductClick);

//var cartUl = $('.cart');

});

var cartUl = $('.cart');