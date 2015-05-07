// var pizza = function() {
//     return 'make the dough';
// }

// var spaghetti = function() {
//     return 'make the noodles';
// }

// var cook = function(rec) {
//     console.log('The first thing I need to do is:');
//     console.log( rec() );
// }


// cook(pizza);
// cook(spaghetti);

//--------------------------------------------


// userIsLogged = true;

// //----- Generic, can be used anywhere
// var deleteAccount = function(x, y) {
//     if(userIsLogged) {
//         console.log(x());
//     } else {
//         console.log(y());
//     }
// }
// //---------------------------



// // My Application
// var success = function() {
//     return 'Yep, were logged in';
// }

// var fail = function() {
//     return 'Nope, were not logged in';
// }


// deleteAccount(success, fail);




// var bar = function(c) {
//     console.log( c() );
// }

// bar(function() {
//     return 'I am foo';
// });




setInterval(function() {

    console.log('I am foo');
    
}, 1000);