var Game = function  () {
    
    this.takeTurn = function() {
        $('.gamePlay').text("You discovered one of those ");
        $('.gamePlay').append(aMonster.currentMonster.name + "s.");
    }

    this.foundWeapon = function() {
        $('.gamePlay').text("You discovered one of those ")
        $('.gamePlay').append(aWeapon.currentWeapon.name + "s.");
    }
}