var Weapon = function() {

    this.selectAWeapon = function() {
        this.howManyWeapons = characterList[0].length;
        var weaponDice = new Dice(this.howManyWeapons);
        this.currentWeapon = characterList[0][weaponDice.roll()];
        return this.currentWeapon;
    }   
}