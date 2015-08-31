// Goal: Make iQuery 
// Acceptance Criteria:
// - Needs to match class selector (Single Class)
// - Match ID selector (Single ID)
// - Need a function called iQuery
// - iQuery takes a single parameter (css selector)
// Bonus
// - Pass a function iQuery and have it run
// - Match a Tag selector

// Pre-req Objectives
// - Demonstrate if statements
// - Demonstrate if else statements
// - Demonstrate document.getElementById
// - Demonstrate document.getElementsByClass
// - Demonstrate functions
// - Demonstrate Logic Operators (===, &&, ||)
// - Explain CSS Selectors
// - Explain Function Parameters
// - Demonstrate Built in Functions
// - Demonstrate Object Literals
// - Demonstrate Accessing Item from Array
// - Demonstrate String.slice method

// Code

function iQuery(selector){

    var allEls;
    var className = "";
    var idName = "";
    var el;
    var getType = {};

    if(selector && getType.toString.call(selector) === '[object Function]'){
        selector();
    } else {

        if(selector.slice(0,1) === "#") {
            idName = selector.slice(1, selector.length);
            el = document.getElementById(idName);
        } else {
            className = selector.slice(1, selector.length);
            allEls = document.getElementsByClassName(className);    
            el = allEls[0];
        }
    
        return el;
    }
}

// Test 1
var el = iQuery('.special');

// Test 2 (el CAN NOT BE undefined)
console.log(el != undefined) 

// Test 3 el should be an object
console.log(typeof(el) === "object");

// Test 4 el should be a DOM object
console.log(el instanceof HTMLElement)

// Test 5 el should have a class of special
console.log(el.className === "special")

var el2 = iQuery('.strange');
// Test 6 el2 should have a class of strange
console.log(el2.className === "strange")

var el3 = iQuery('.abba');
// Test 7 el2 should have a class of strange
console.log(el3.className === "abba")

var el4 = iQuery('.zebra');
// Test 8 el2 should have a class of strange
console.log(el4.className === "zebra")

var el5 = iQuery('.foo');
// Test 9 el2 should have a class of strange
console.log(el5.className === "foo")

var el6 = iQuery('#content');
// Test 10 el6 should have a class of strange
console.log(el6 != undefined) 

// Test 11 el6 should be a DOM object
console.log(el6 instanceof HTMLElement)

// Test 12 el6 has ID = to content
console.log(el6.id === "content")

var el7 = iQuery('#main');
console.log(el7.id === "main")

// Test 13, When I pass a function, call the function
iQuery(function(){
    console.log("Pass")
})

var $ = iQuery;






// var Person = function(){
//     this.name = "Unknown"
//     this.age = 0
// }

// var Pet = function(){
//     this.name = "Unknown"
//     this.type = "Unknown"
// }

// var tim = new Person();
// var chewy = new Pet();
// chewy.name = "Chewy";
// chewy.type = "Dog"

// console.log(tim.name)
// console.log(tim.age)
// console.log(typeof(tim))
// console.log(tim.constructor.name)