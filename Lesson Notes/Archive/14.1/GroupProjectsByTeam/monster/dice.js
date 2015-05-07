var Dice = function(sides) {
    this.sides = sides;
    //var roll = Math.floor((Math.random() * sides));

    this.roll = function() {
         
        return Math.floor((Math.random() * this.sides));
        
    }
}


