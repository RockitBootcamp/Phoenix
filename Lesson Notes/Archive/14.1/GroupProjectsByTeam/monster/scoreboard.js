var Scoreboard = function(player) {
    // properties

    // methods
    this.drawScoreboard = function() { 
        $('.playerImage').html('<img src="image/' + aPlayer.image + '" />');
        $('.playerType').text(aPlayer.name);
        $('.bio').text(aPlayer.bio);
        $('.weapon').text(aPlayer.weapon);
        $('.healthSpan').text(aPlayer.health);
        $('.scoreSpan').text(aPlayer.score);
        $('.weaponImage').html('<img src="image/' + aPlayer.weapon + '.png" />');
        // $('.weaponImage').html('<img id="weaponPic" src="image/'+ aWeapon + '.png" />');
        // $('.monsterImage').append(aMonster);
            // $('.monsterName').text(aMonster.currentMonster.name);
            // $('.monsterBio').text(aMonster.currentMonster.bio);
            // $('.monsterLevel').text(aMonster.currentMonster.level);
            // $('.monsterWeapon').text(aMonster.currentMonster.weapon);
    };
            
            
    

    this.hideRules = function() {
        $('.rules').addClass("inactive");
        $('.hiddenRules').removeClass("inactive");
    }

    this.showRules = function() {
        $('.hiddenRules').addClass("inactive");
        $('.rules').removeClass("inactive");
    }

}

var aScoreboard;
