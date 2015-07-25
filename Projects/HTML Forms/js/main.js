$(function(){


    $(".ch1 form").on("submit", function(e){

        // Check for input firstName

        var input = $(this).parents(".challenge").find("input");

        assert(e, function(data){
            data.msg = "Field not Found. The field wasn't found.";
            return input.length > 0;               
        })

        assert(e, function(data){
            data.msg = "Input type not text";
            return $(input).attr('type') == "text";               
        })

        assert(e, function(data){
            data.msg = "FirstName input not found.";
            return $(input).attr('name') == "firstName";               
        })

    })


    // $(".ch2 form").on("submit", function(e){

    //     // Check for input firstName

    //     var input = $(this).parents(".challenge").find("input");

    //     assert(e, function(data){
    //         data.msg = "Field not Found. The field wasn't found.";
    //         return input.length > 0;               
    //     })

    //     assert(e, function(data){
    //         data.msg = "Input type not text";
    //         return $(input).attr('type') == "text";               
    //     })

    //     assert(e, function(data){
    //         data.msg = "LastName input not found.";
    //         return $(input).attr('name') == "lastName";               
    //     })

    // })


    $(".ch2 form").on("submit", function(e){

        // Check for input firstName

        var input = $(this).parents(".challenge").find("input");

        assert(e, function(data){
            data.msg = "Field not Found. The field wasn't found.";
            return input.length > 0;               
        })

        assert(e, function(data){
            data.msg = "Input type not password";
            return $(input).attr('type') == "password";               
        })

        assert(e, function(data){
            data.msg = "Password input not found.";
            return $(input).attr('name') == "password";               
        })

    })


    $(".ch3 form").on("submit", function(e){

        // Check for input firstName

        var input = $(this).parents(".challenge").find("input");

        assert(e, function(data){
            data.msg = "Field not Found. The field wasn't found.";
            return input.length > 0;               
        })

        assert(e, function(data){
            data.msg = "Input type not checkbox";
            return $(input).attr('type') == "checkbox";               
        })

        assert(e, function(data){
            data.msg = "Giraffe input not found.";
            return $(input).attr('name') == "giraffe";               
        })

    })

    $(".ch4 form").on("submit", function(e){

        // Check for input firstName

        var inputs = $(this).parents(".challenge").find("input");

        assert(e, function(data){
            data.msg = "Field not Found. The field wasn't found.";
           
            return inputs.length > 1;               
        })

        assert(e, function(data){
            data.msg = "Input type not radio";
            var pass = $(inputs).eq(0).attr('type') == "radio"
            pass = pass && $(inputs).eq(1).attr('type') == "radio"
            return pass;               
        })

        assert(e, function(data){
            data.msg = "hairColor input not found.";
            var pass = $(inputs).eq(0).attr('name') == "hairColor"; 
            pass = pass && $(inputs).eq(1).attr('name') == "hairColor"; 
            return pass;               
        })

    })



    $(".ch5 form").on("submit", function(e){

        // Check for input firstName

        var inputs = $(this).parents(".challenge").find("input");

        assert(e, function(data){
            data.msg = "Field not Found. The field wasn't found.";
            return inputs.length > 0;               
        })

        assert(e, function(data){
            data.msg = "Input type not hidden";
            var pass = $(inputs).eq(0).attr('type') == "hidden"
            return pass;               
        })

        assert(e, function(data){
            data.msg = "secret input not found.";
            var pass = $(inputs).eq(0).attr('name') == "secret"; 
            return pass;               
        })

    })


    $(".ch6 form").on("submit", function(e){

        // Check for input firstName

        var input = $(this).parents(".challenge").find("select");

        assert(e, function(data){
            data.msg = "Field not Found. The field wasn't found.";
            return input.length > 0;               
        })

        assert(e, function(data){
            data.msg = "secret input not found.";
            var pass = $(input).eq(0).attr('name') == "state"; 
            return pass;               
        })

        assert(e, function(data){
            data.msg = "Dropdown does not have three options.";
            var pass = $(input).eq(0).children() == 3;
            return pass;               
        })

    })

    $(".ch7 form").on("submit", function(e){

        // Check for input firstName

        var input = $(this).parents(".challenge").find("input");

        assert(e, function(data){
            data.msg = "Field not Found. The field wasn't found.";
            return input.length > 0;               
        })

        assert(e, function(data){
            data.msg = "age input not found.";
            var pass = $(input).eq(0).attr('name') == "age"; 
            return pass;               
        })

        assert(e, function(data){
            data.msg = "input is not type number.";
            var pass = $(input).eq(0).attr('type') == "number"; 
            return pass;               
        })
    })

    $(".ch8 form").on("submit", function(e){

        // Check for input firstName

        var input = $(this).parents(".challenge").find("input");

        assert(e, function(data){
            data.msg = "Field not Found. The field wasn't found.";
            return input.length > 0;               
        })

        assert(e, function(data){
            data.msg = "age input not found.";
            var pass = $(input).eq(0).attr('name') == "height"; 
            return pass;               
        })

        assert(e, function(data){
            data.msg = "input is not type range.";
            var pass = $(input).eq(0).attr('type') == "range"; 
            return pass;               
        })

        assert(e, function(data){
            data.msg = "step is not ten.";
            var pass = $(input).eq(0).attr('step') == "10"; 
            return pass;               
        })

        assert(e, function(data){
            data.msg = "min is not 0.";
            var pass = $(input).eq(0).attr('min') == "0"; 
            return pass;               
        })

        assert(e, function(data){
            data.msg = "max is not 100.";
            var pass = $(input).eq(0).attr('max') == "100"; 
            return pass;               
        })
    })


    $(".ch9 form").on("submit", function(e){

        // Check for input firstName

        var input = $(this).parents(".challenge").find("input");

        assert(e, function(data){
            data.msg = "Field not Found. The field wasn't found.";
            return input.length > 0;               
        })

        assert(e, function(data){
            data.msg = "birthday input not found.";
            var pass = $(input).eq(0).attr('name') == "birthday"; 
            return pass;               
        })

        assert(e, function(data){
            data.msg = "input is not type date.";
            var pass = $(input).eq(0).attr('type') == "date"; 
            return pass;               
        })
    })









    function assert(e, success){
        var data = {}
        if(!success(data)){
            showMessage(data.msg)  
            e.preventDefault()
            return false
        }
    }

    function showMessage(message){

        var alertBox = $("<div class='alert'>")
        alertBox.append(message)

        $("body").prepend(alertBox)

    }

    
})