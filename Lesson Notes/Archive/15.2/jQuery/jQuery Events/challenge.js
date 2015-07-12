
$(function() {

    // Challenge 1. Console.log hello world when you click the button.btn
    // Step 1. Find the element you want to hook onto.
    // Step 2. Write the code to hook onto a specific event
    // Step 3. Do you action inside the function

    // Challenge 2. Console.log "WOW" when you mouseover the anchor
    
    // Challenge 3. Console.log "Great" when you keyDown in the input box

    // Challenge 4. Console.log "Boo" when you keyUp in the input box

    // Challenge 5. Console.log "Sup" when the firstname has focus

    // Challenge 6. Console.log "Good bye" when the firstname looses focus(blur)

    // Challenge 7. Console.log "Nice try" when you Submit the form


    // Challenge 8-14. Repeat challenges 1-7 using the shortcut event syntax


    // Challenge 15. Console.log $(this) when anything is clicked
    
    // Challenge 16 Console.log "Fun" when you click on a button in the fun div that already exists
    

    // Challenge 17 Console.log "Fun" when you click on a button in the fun div that already exists and for any new button
    $('div.fun').on('click', "button", function(){
        
        console.log("fun");
      

        
    });


    // HELPER Function

    $('a.btn').on('click', function(){
        
        $('div.fun').append(' <button>Fun</button> ');
             
    });

});


