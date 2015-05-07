var heroes = [];
for (i in character) { if (character[i].char_type_id == 0 ) { heroes.push(character[i]) }}
var monsters = [];
for (i in character) { if (character[i].char_type_id == 1 ) { console.log(character[i].name); }}

