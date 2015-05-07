var MapObject = function() {
    this.aMonster;

    this.getLocation = function(controllerData){
        var currLocationId = "#" + controllerData.currLocation;
        var prevLocationId = "#" + controllerData.prevLocation;
        $(prevLocationId).addClass('visitedTile');
        $(currLocationId).removeClass('visitedTile');
        $(currLocationId).removeClass('goalTile');
        $(currLocationId).addClass('activeTile');
        $('.attack').removeClass('inactive');

    };

    this.monsterOrWeapon = function () {
        var checkForMonsters = new Dice(5);
        if (checkForMonsters.roll() == 1) {
            var aWeapon = new Weapon();
            aWeapon = aWeapon.selectAWeapon();
            
            $('.gamePlay').text("You found one " + aWeapon + ". ");
            $('.attack').text('Pick Up');
            $('.attack').addClass('pickUp');
            $('.pickUp').removeClass('inactive');
            $('.attack').removeClass('attack');
            aMonster = [];
            return aWeapon;

        } else {
            var aMonster = new Monster();
            aMonster = aMonster.selectAMonster();
            $('.gamePlay').text("You encountered the " + aMonster.name + ". ");
            $('.monsterImg').html("<img id='monsterImg' src='" + aMonster.image + "'/>");
            $('.monsterDesc').html('<h2>'+ aMonster.name +'</h2>');
            $('.weaponImg').html("<img id='weaponPic' src='image/" + aMonster.weapon + ".png'/>");
            $('.weaponName').html('<h2>'+ aMonster.weapon +'</h2>');
            $('.pickUp').text('Attack');
            $('.pickUp').addClass('attack');
            $('.pickUp').removeClass('inactive');
            $('.pickUp').removeClass('pickUp');
            aWeapon = [];
            return aMonster;
        }
    };
};

