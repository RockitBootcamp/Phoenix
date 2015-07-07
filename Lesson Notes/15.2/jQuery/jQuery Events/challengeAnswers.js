// Challenge 1. Console.log hello world when you click the button.btn

// Step 1. Find the element you want to hook onto.
// $('button.btn')

// Step 2. Write the code to hook a specific event
// $('button.btn').on('click', function(){});

// Step 3. Do you action inside the function
// $('button.btn').on('click', function(){
//    console.log("hello world");
//});

// Challenge 2. Console.log "WOW" when you mouseover the anchor
// $('a').on('mouseover', function(){
//    console.log("WOW");
//});

// Challenge 3 Console.log "Great" when you keyDown in the input box
// $('input').on('keydown', function(){
//    console.log("WOW");
// });

// Challenge 4. Console.log "Boo" when you keyUp in the input box
// $('input').on('keyup', function(){
//    console.log("Boo");
// });

// Challenge 5. Console.log "Sup" when the firstname has focus
// $('.fn').on('focus', function(){
//    console.log("Sup");
// });

// Challenge 6. Console.log "Good bye" when the firstname looses focus(blur)
// $('.fn').on('blur', function(){
//    console.log("Good bye");
// });

// Challenge 7. Console.log "Nice try" when you Submit the form
// $('form').on('submit', function(){
//         event.stopPropagation();
//         console.log("Good bye");
//         return false;

        
//     });

// Challenge 6. Console.log $(this) when anything is clicked
// $('*').on('click', function(){
//     event.stopPropagation()
//    console.log($(this));
// });

// Challenge 7
// $('button.btn').click(function(){
//    console.log("hello world");
//});

// Challenge 16 Console.log "Fun" when you click on a button in the fun div that already exists
// $('div.fun button').on('click', function(){   
//     console.log("fun");       
// });

// Challenge 17 Console.log "Fun" when you click on a button in the fun div  that already exists and for any new button
// $('div.fun').on('click', "button", function(){  
//     console.log("fun");    
// });