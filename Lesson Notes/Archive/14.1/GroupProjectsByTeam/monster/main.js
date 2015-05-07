

var aController = new Controller;
var aMap = new MapObject;  
var aWeapon = new Weapon;
var aGame = new Game;
var aScoreboard = new Scoreboard;

var moveUp = function() {
    aController.walkUp();
    aMap.getLocation(aController);
    aMap.monsterOrWeapon();
}

var moveDown = function () {
    aController.walkDown();
    aMap.getLocation(aController);
    aMap.monsterOrWeapon();
}

var moveLeft = function () {
    aController.walkLeft();
    aMap.getLocation(aController);
    aMap.monsterOrWeapon();
}

var moveRight = function () {
    aController.walkRight();
    aMap.getLocation(aController);
    aMap.monsterOrWeapon();
}

var keyGotPusheded = function  (e) {
    if (e.keyCode == 37) {
        moveLeft();
        return false;
    } else if (e.keyCode == 39) {
        moveRight();
        return false;
    } else if (e.keyCode == 38) {
        moveUp();
        return false;
    } else if (e.keyCode == 40) {
        moveDown();
        return false;
    }
    // body...
}

$(function() {

//event listeners
// aController.getLocation();
$('.up').on('click', moveUp);
$('.down').on('click',moveDown) ;
$('.left').on('click', moveLeft);
$('.right').on('click', moveRight);
// $('.runAway').on('click', aController.runAway);
// $('.runAway').on('click', aController.getLocation);
$('.replay').on('click', aGame.playAgain );
$(document).keydown(keyGotPusheded);
$('.quit').on('click', gameover);
$('.replay').on('click', replay)
$('.rules').on('click', aScoreboard.hideRules);
$('.hiddenRules').on('click', aScoreboard.showRules);
});