(function() {


    function person(firstName, lastName, age, eyeColor) {
        this.firstName = firstName;  
        this.lastName = lastName;
        this.age = age;
        this.eyeColor = eyeColor;
        this.changeName = function (name) {
            this.lastName = name;
        }
    }

    this.firstname = "Sam"

    var brig = new person("brig", "l", "25", "blue");

    console.log(brig)


    var y = 7;


    $(function(){



        $('a').append("<b>hello</b>");


            
    })
    


}());



console.log(y);


