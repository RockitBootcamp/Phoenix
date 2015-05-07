   

    var Player = function(selectedPlayer, aMonster){
        
        this.name = [characterList[1][selectedPlayer].name];
        this.bio = [characterList[1][selectedPlayer].bio];
        this.weapon = [characterList[1][selectedPlayer].weapon];
        this.health = [characterList[1][selectedPlayer].health];
        this.score = [characterList[1][selectedPlayer].score];
        this.image = [characterList[1][selectedPlayer].image];

        // methods
        d12 = new Dice(12);
        d2 = new Dice(2);

        //Player decides to attack
        this.attack = function () {
            
            var enemyStrength = 6;
            
            var newAttack = d12.roll();
            if (newAttack === 0) {
                newAttack += 1;
                // $('gamePlay').text ("The" + aMonster.name + "has a strength of :" aMonster.level + "your attack was a :" + newAttack);
                console.log(newAttack);
            }
            
            if (newAttack >= enemyStrength) {
                aPlayer.score = parseInt(aPlayer.score) + 100;
                $('.scoreBanner').text(aPlayer.score);
                $('.scoreSpan').text(aPlayer.score);
                $('.gamePlay').text("You win. + 100");
                $('.attack').addClass('inactive');
                $('.dpad').removeClass('inactive');
                
            }
            else {
                var enemyAttack = d12.roll();
                if (enemyAttack) {
                $('.gamePlay').text("You missed");
                $('.gamePlay').append("<br>Enemy's attack: " + enemyAttack);
                aPlayer.health -= enemyAttack;
                $('.gamePlay').append("<br> -" + enemyAttack + " health.");
                $('.healthBanner').text(aPlayer.health);
                $('.healthSpan').text(aPlayer.health);
                $('.dpad').addClass('inactive');
                if (aPlayer.health <= 0) {
                    aPlayer.health = 0;

                        console.log("Your Health: " + aPlayer.health);
                        gameover();
                    }
                }     
            }        
        };

        // Run Away was pushed

        this.runAway = function() {
            myRoll = d2.roll();
            if(myRoll == 0) {
                aMap.currLocation = aMap.prevLocation;
                console.log('rolled a zero');
            }
            else {
                aMap.currLocation = aMap.currLocation;
                console.log('rolled a one');

            }
            
        };
            
        // Player can pick up a potion
        this.pickup = function() {
            console.log("i'm picking up what you're putting down.")
            if(aWeapon > characterList[0][0]){
                $('gamePlay').text("You have picked up the" + aWeapon.name);
                // $('.weaponImage').html('<img id="weaponPic" src="image/'+ aWeapon + '.png" />');


            } else {
                this.health = this.health + 5;
                $('gamePlay').text("The potion you received increased your health");
            }
        
    
        }
    }

    var aPlayer;

     