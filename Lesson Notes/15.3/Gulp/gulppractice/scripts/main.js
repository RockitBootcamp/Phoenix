
$(function(){
    
    $('button').on('click', function(){
        var message = $('input').val();

        $.post("http://localhost:3000/todos/", {"message" : message}, function(){
            $('ul').append('<li>' + message + '</li>')    
        })

        
    })


    $.get("http://localhost:3000/todos/", function(data){
        
        console.dir(data)

        // Append the message to the ui?
        // for(var i=0; i<data.length; i++){
        //     $('ul').append('<li>' + data[i].message + '</li>') 
        // }

        data.forEach(function(e){
           $('ul').append('<li>' + e.message + '</li>')  
        })
    })

})
