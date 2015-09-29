// Callback functions

function buyMilk(callback) {
  console.log('Bought some milk');
  callback('buying some milk');
}

function callMeWhenDone(what) {
  console.log('I\'m done ' + what);
}

// buyMilk(callMeWhenDone);



function getUsersFromDb(callback) {
  // ...... get users
  var users = ['Bob', 'Joe', 'T-bone'];
  callback(users);
}

// getUsersFromDb(function (myUsers) {
//   console.log('users: ', myUsers);
// });



function getSecretCode(secretAgent) {
  var secretCode = 8;
  secretAgent(secretCode);
}

// getSecretCode(function (code) {
//   console.log('Report to boss, I got their code:', code)
// })




function getAdminKeith(findKeith) {
  var foundKeith = true;
  findKeith(foundKeith);
}

// getAdminKeith(function (isKeithFound) {
//   console.log(isKeithFound);
// })








function trackPackage(callback) {
  var packageHasArrived = false;

  while (!packageHasArrived) {
    // check for package
  }

  if (packageHasArrived) {
    callback('rabid wolves');
  }
}




// trackPackage(function (pkgContents) {
//   console.log('I received a box of ' + pkgContents);
// })



// 2 args (arity=2)
// setTimeout(function () {
//   console.log('3 seconds have passed');
// }, 3000);

// setInterval() exists but you should avoid using it

function orderPizza(toppings, callback) {
  // cook a pizza
  setTimeout(function () {
    callback('pizza with ' + toppings);
  }, 6000);
}

orderPizza('pepperoni and anchovies', function (myPizza) {
  console.log('Hey guys, the ' + myPizza + ' is here!');
});


// document ready function
$(function () {
  // page is loaded, do stuff
})
