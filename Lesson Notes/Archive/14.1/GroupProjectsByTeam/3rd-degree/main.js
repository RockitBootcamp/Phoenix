;(function($) {

    $('.logOut').hide();
    $('table').hide();
    $('.noResults').hide();

   //-------drop down box for register and login --------

    $(".register").click(function(){
        $(".toggle").toggle("blind");     
    });

    $(".logIn").click(function(){
        $(".logToggle").toggle("blind");
    });

    $( ".toggle" ).hide();
    $(".logToggle").hide();

    // ----------client side login email validation---------
    $("#logInEmail").keyup(function(){
        var emailInput = $('#logInEmail').val();
        var filter = /^[a-zA-Z0-9-_.+]+@[a-zA-Z-_.+]+\.[a-z]{1,6}\.?[a-z]+$/;

        if(!filter.test(emailInput)){
            $('.logToggle .emailMessage').html('Please enter valid email');
        }else {
            $('.logToggle .emailMessage').html('');
        }

    });

    //----------login submit button disabled/enabled----------
    $('.logToggle').keyup( function(){
        var email = $('#logInEmail').val();
        var password = $('#logInPassword').val();
        var passfilter = /^((?=.*(\d|[@#$%]))(?=.*[a-zA-Z]).{6,20})/;
        var emailfilter = /^[a-zA-Z0-9-_.+]+@[a-zA-Z-_.+]+\.[a-z]{1,6}\.?[a-z]+$/;
        if(emailfilter.test(email)) {            
            if(passfilter.test(password)) {
                    $('.logInSubmit').prop("disabled", false);
                } else {
                    $('.logInSubmit').prop("disabled", true);
                }
        } else {
            $('.logInSubmit').prop("disabled", true);
        }
        
    });   

    // //--------------Server side Login email validation-------
    $('.logInSubmit').click(function(){

        var validate = {
            logInEmail: $("#logInEmail").val(),
            password: $("#logInPassword").val()
        };

        $.ajax({
            url: "login.php",
            type: 'POST',
            cache: false,
            dataType: 'json',
            data: validate,
            error: function(xhr){

                var dataError = $.parseJSON(xhr.responseText);
                console.log(dataError.msg);

                $('.logToggle div').remove(); //removing the div created below so there isn't a duplicate message
                $('.logToggle').prepend('<div>' + dataError.msg + '</div>');
                
            },

            success: function(xhr) { 

                $('div.status').hide();
                $('.logOut').show();
                $('.welcome').text(xhr.msg + ', ' + validate.logInEmail);
                console.log(xhr.msg);

            }

        }); 
        return false;
    });
    $('#submitReg').click(function(){

        var validate = {
            email: $("#email").val(),
            password: $("#password").val()
        };

        $.ajax({
            url: "register.php",
            type: 'POST',
            cache: false,
            dataType: 'json',
            data: validate,
            error: function(xhr){

                var dataError = $.parseJSON(xhr.responseText);
                console.log(dataError.msg);
                $('.toggle div').remove();
                $('.toggle').prepend('<div>' + dataError.msg + '</div>');
                
            },

            success: function(xhr) { 

                $('div.status').hide();
                $('.logOut').show();
                $('.welcome').text(xhr.msg + ', ' + validate.email);
            }

        }); 
        return false;
    });

    // //--------------Client Side Registration email validation-------
    $("#email").keyup(function(){
        var emailInput = $('#email').val();
        var filter = /^[a-zA-Z0-9-_.+]+@[a-zA-Z-_.+]+\.[a-z]{1,6}\.?[a-z]+$/;

        if(!filter.test(emailInput)){

            $('#email').css('background-color', '#F6CED8');
            $('.toggle .emailMessage').html('Please enter valid email');
       
        }else {
            $('#email').css('background-color', '#64CE7F');
            $('.toggle .emailMessage').html('');
        }

    });

    // // ------Client Side registration password validation------
    $("#password").keyup(function(){
        var regpass = $('#password').val();
        var filter = /^((?=.*(\d|[@#$%]))(?=.*[a-zA-Z]).{6,20})/;

        if(!filter.test(regpass)){
            $('#password').css('background-color', '#F6CED8');
            $('#passwordMessage').html('-min of 6 characters');
            $('#passwordMessage').append('<div class="passwordMessage">-min 1 number/special character</div>');
        }else {
            $('#password').css('background-color', '#64CE7F');
            $('.passwordMessage').html('');
        }

    })
    // //-------registration password match begin------------

    $("#confirmPassword").keyup(function() {
        //Store the password field objects into variables ...
        var pass1 = document.getElementById('password');
        var pass2 = document.getElementById('confirmPassword');
        //Store the Confimation Message Object ...
        var message = document.getElementById('confirmMessage');
        //Set the colors we will be using ...
        var goodColor = "#66cc66";
        var badColor = "#ff6666";
        //Compare the values in the password field 
        //and the confirmation field
            if(pass1.value == pass2.value) {
                //The passwords match. 
                //Set the color to the good color and inform
                //the user that they have entered the correct password 
                pass2.style.backgroundColor = goodColor;
                message.innerHTML = '';
            } else {
                //The passwords do not match.
                //Set the color to the bad color and
                //notify the user.
                pass2.style.backgroundColor = badColor;
                message.innerHTML = "Passwords Do Not Match"
                
            }
    });
    //----------registration submit button disabled/enabled----------
    $('.toggle').keyup( function(){
        var email = $('#email').val();
        var regpass1 = $('#password').val();
        var regpass2 = $('#confirmPassword').val();
        var passfilter = /^((?=.*(\d|[@#$%]))(?=.*[a-zA-Z]).{6,20})/;
        var emailfilter = /^[a-zA-Z0-9-_.+]+@[a-zA-Z-_.+]+\.[a-z]{1,6}\.?[a-z]+$/;
        if(emailfilter.test(email)) {            
            if(passfilter.test(regpass1)) {
                if(regpass1==regpass2){
                    $('#submitReg').prop("disabled", false);
                } else {
                    $('#submitReg').prop("disabled", true);
                }
            } else {
                $('#submitReg').prop("disabled", true);
            }
        } else {
            $('#submitReg').prop("disabled", true);
        }
    });   

    //___________table data populate begin___________________________
    
    $('.go').click(function(){
        $('tbody').html('');
        $('.noResults').hide();
        $('table').hide();

       var userParam = {
            category: $("#category").val(),
            zip_code: $(".zip").val()
       };

        $.ajax({
            url: "search.php",
            cache: false,
            dataType: 'json',
            type: 'POST',
            data: userParam,
            success: function(data) {
                //-------put data into table on screen-------------
                var template = Handlebars.compile( $('#searchResults').html() );
                
                var Icons = [];
                var Titles = [];
                var Addresses  =[];
                
                $('.about').hide();


                for (i in data.results) {
                    $('tbody').append(template(data.results[i]));
                    
                    var name = data.results[i]['name'];
                    Titles.push(name);

                    var address = data.results[i]['street_address'];
                    Addresses.push(address);
                    
                    //-----------choosing which pin to use for each place---------------
                    var tweet_count = data.results[i]['tweet_count'];
                    var rating = data.results[i]['rating'];
                    var pin;
                    if(tweet_count <= 50) {
                        if(rating <= 1.5) {
                            pin = "images/redsmall.png";
                        } else if (rating <= 2.5) {
                            pin = "images/orangesmall.png";
                        } else if (rating <= 3.5) {
                            pin = "images/yellowsmall.png";
                        } else { 
                            pin = "images/greensmall.png";
                        }

                    } else if (tweet_count <= 100) {
                        if(rating <= 1.5) {
                            pin = "images/redsmed.png";
                        } else if (rating <= 2.5) {
                            pin = "images/orangemed.png";
                        } else if (rating <= 3.5) {
                             pin = "images/yellowmed.png";
                        } else { 
                             pin = "images/greenmed.png";
                        }

                    } else if (tweet_count <= 150) {
                        if(rating <= 1.5) {
                             pin = "images/redlarge.png";
                        } else if (rating <= 2.5) {
                             pin = "images/orangelarge.png";
                        } else if (rating <= 3.5) {
                             pin = "images/yellowlarge.png";
                        } else { 
                             pin = "images/greenlarge.png";
                        }

                    } else {
                        if(rating <= 1.5) {
                             pin = "images/redxl.png";
                        } else if (rating <= 2.5) {
                             pin = "images/orangexl.png";
                        } else if (rating <= 3.5) {
                             pin = "images/yellowxl.png";
                        } else { 
                             pin = "images/greenxl.png";
                        }
                      }

                      Icons.push(pin);

                };

                //---------- controlling the if no results or table of results shows-----
                if(Icons.length>0){  
                    $('table').show();
                }else{
                    $('.noResults').show();
                }

                var geocoder;
                var map;
                geocoder = new google.maps.Geocoder();
                var latlng = new google.maps.LatLng(33.433702, -111.941948);
                var mapOptions = {
                  zoom: 12,
                  center: latlng
                };
                map = new google.maps.Map(document.getElementById('map_div'), mapOptions);

                for (var i in Icons){
                    //--------geocode db address----------
                    var makePins  = function (index){
                        geocoder.geocode( { 'address': Addresses[index]}, function(results, status) { 
                          if (status == google.maps.GeocoderStatus.OK) {
                            map.setCenter(results[0].geometry.location);
                            //-------defining pin/marker properties-------------
                            var marker = new google.maps.Marker({
                                map: map,
                                position: results[0].geometry.location,
                                icon: Icons[index],
                                title: Titles[index]
                            });
                          } else {
                            alert('Geocode was not successful for the following reason: ' + status);
                          }
                        });

                    };

                    makePins(i);
                }
            }

        });
         return false;

    });

})(jQuery);









