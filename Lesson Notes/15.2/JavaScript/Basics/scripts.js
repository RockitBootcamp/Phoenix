
document.addEventListener("DOMContentLoaded", function(event) { 
  
    // Challenge 0: Print the contents of the div tag
    var divElements = document.getElementsByTagName("div");
    var div = divElements[0];
    console.log(div.innerHTML);

    // Challenge 1 Console.log the innerHTML of the b tag
    var bElements = document.getElementsByTagName("b");
    var b = bElements[0];
    console.log(b.innerHTML);    

    // Challenge 2: Change my lastname to "Smith"
    b.innerHTML = "Smith";
    b.className = "special";

    // Challenge 3: Set the p.innerHTML to be "Invalid Name"
    var p = document.getElementById("error");
    p.innerHTML = "Invalid Name";

    // Challenge 4: Print out the number of children of the document
    // HINT: use console.log(document);  
    console.log(document.childElementCount);


    // Challenge 5: Print out the Title of the the document
    // Hint: Look at Document children
    console.log(document.children[0].children[0].children[1].innerHTML);

    // Challenge 6: Print out the nodeName of every element
    

    // Let's use jQuery
    // Challenge 7: Print the contents of the div tag
    var div = $("div");  // equivalent to document.getElementBy....
    console.log( div.text() );

    // Challenge 8 Console.log the innerHTML of the b tag
    console.log( $("b").text() );

    // Challenge 9 Console.log the innerHTML of the p tag
    console.log( $("p").text() );

    // Challenge 10 Set the last name to Jackson
    jQuery("b").text("Jackson");

    // Challenge 11 show the HTML of the div
    console.log( $("div").html()  );

    console.log( $("div").text()  );

    // Challenge 12 add a new food to foods
    $(".foods").append("<li>Pizza</li>");

    $("<li>Pie</li>").appendTo($(".foods"));

    // Challenge 13 What class is on the div
    console.log( $("div").attr("class") );

    // Challenge 14 Add a new class title to div
    $("div").addClass("special");
    
    $("div").removeClass("fn");

}); 

    

