var Controller = function() {

    this.currLocation = 1;
    this.prevLocation = 1;

    this.walkUp = function(){
        this.prevLocation = this.currLocation;
        if (this.currLocation <= 5) {
            this.currLocation = this.currLocation;
        } else {
            this.currLocation -= 5;
        }
    };

    this.walkDown = function() {
        this.prevLocation = this.currLocation;
        if (this.currLocation >= 21) {
            this.currLocation = this.currLocation;
        } else {
            this.currLocation += 5;
        }

    };

    this.walkLeft = function() {
        this.prevLocation = this.currLocation;
        if (this.currLocation == 1) {
            this.currLocation = this.currLocation;
        } else if (this.currLocation == 6) {
            this.currLocation = this.currLocation;
        } else if (this.currLocation == 11) {
            this.currLocation = this.currLocation;
        } else if (this.currLocation == 16) {
            this.currLocation = this.currLocation;
        } else if (this.currLocation == 21) {
            this.currLocation = this.currLocation;
        } else {
            this.currLocation -= 1;
        }
    };

    this.walkRight = function() {
        this.prevLocation = this.currLocation;
        if (this.currLocation == 5){
            this.currLocation = this.currLocation;
        } else if (this.currLocation == 10) {
            this.currLocation = this.currLocation;
        } else if (this.currLocation == 15) {
            this.currLocation = this.currLocation;
        } else if (this.currLocation == 20) {
            this.currLocation = this.currLocation;
        } else if (this.currLocation == 25) {
            this.currLocation = this.currLocation;
        } else {
            this.currLocation += 1;
        }
    };
}



