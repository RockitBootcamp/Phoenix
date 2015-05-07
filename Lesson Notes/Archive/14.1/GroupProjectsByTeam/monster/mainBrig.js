$(function() {

var playerScore = 0;
var playerHealth = 100;
var enemyStrength = 7;
var weaponStrength = 1;

var playerWalk = function() {
    console.log("You took 5 steps. You meet a monster");
    enemyStrength = Math.floor((Math.random() * 10 ));
    console.log("This monster is " + enemyStrength + " strong.");
    playerTurn();
}

var chooseMonsters = function() {
    var howManyMonsters = characterList[2].length;
    var currentMonster = characterList[2][Math.floor((Math.random() * howManyMonsters ))];
};

var playerTurn = function () {
    var playerAttack = Math.floor((Math.random() * 12));
        if (playerAttack === 0) {
            playerAttack += 1;
        }
    console.log("Your roll: " + playerAttack);
    playerAttack += weaponStrength;
    console.log("your attack: " + playerAttack);

    if (playerAttack >= enemyStrength) {
        playerScore += 100;
        console.log("you win.");
    }
    else {
        var enemyAttack = Math.floor((Math.random() * 12));
        console.log("you missed");
        console.log("Enemy's attack: " + enemyAttack);
        playerHealth -= enemyAttack;
        console.log("your score: " + playerScore + ". Your health: " + playerHealth);
        if (playerHealth === 0) {
            console.log("GAME OVER");
        }
    }     
}

// Start Run Away function GA
var plyrCurLoc = 2;
var plyrPrevLoc = 1;

var runAway = function() {
    console.log('You pressed Run Away');
    plyrCurLoc = plyrPrevLoc; // new player location
    console.log('New player location', plyrCurLoc);
}

$('#runaway').on("click", runAway);

$('#turn').on("click", playerWalk);


<<<<<<< HEAD

/*
(function(){

    var Monstor = function(settings){
        // override settings ....


        this.attack = function(enemy){

        }

        this.die = function(){

        };

    };

    var Player = function(settings){
        // override settings ....

        this.attack = function(enemy){

            // Perform random
            // if I win
            enemy.die();

            // if I lose
            this.lose();

        }

        this.lose = function(){
            this.settings.health = this.settings.health - 5;
        };

    };


    // Load our db
    var settings = db.fetch();
    // foreach(setting in settings)
    // if settings is monstor ...

    // create a monstor
    var monstor1 = new Monstor({
            name: "Vampire",
            bio: "I'm a vampire, I hate garlic.",
            level: 6,
            weapon: weaponType[0] 
        });

    // if setting is player
    var player = new Player({
        name: "Amazon",
        bio: "I'm a hero",
        weapon: weaponType[0],
        health: 100,
        score: 0
    });


})();

// when user says move left
    player.location = player.location - 1;
    // Check if monstor is here
    // foreach monstor in monstors
    // if monstor.location == player.location
        // alert user
        // make run/attack buttons visible

// When user clicks attack
    // find monster in player location
    // foreach monster is monsters
        // if m.location == player.locatoin
            // player.attack(m);
            //



*/
=======
// pickup Item (weapon, other type item) GA

var plyrItemHeld = characterList[1].weapon;

var itemToPU = characterList[0][1];

console.log(plyrItemHeld + itemToPU);

if (plyrItemHeld !== itemToPU) {
    plyrItemHeld = itemToPU;
    console.log(plyrItemHeld);

}

>>>>>>> 4c8e04f0c8ecc58bd2254d991c222cb11a8d9f41
});
