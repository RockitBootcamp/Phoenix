var people = [];

var p1 = {name: 'Brad'};
var p2 = {name: 'Dave'};
var p3 = {name: 'Mike'};

people.push(p1, p2, p3);

for (i in people) {
    console.log( people[i].name );
}