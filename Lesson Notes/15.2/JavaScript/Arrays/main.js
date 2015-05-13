
var people = [];

var p1 = {
    'name': 'Brad'
}

var p2 = {
    name: 'Dave',
    kids: ['billy', 'sally']
}

var p3 = {
    name: 'Mike'
}

people.push(p1, p2, p3);

console.log( people[1].kids[0] );
console.log( people[1]['kids'][0] );



// Index Of

var a = ['foo', 'bar', 'baz'];
console.log( a.indexOf('bar') ); // output 1


// Join
var a = ['hello', 'world'];
console.log( a.join() ); // outputs hello,world
console.log( a.join(' ') ); // outputs hello world

// Pop
var a = [1,2,3,4,45,5];
var last = a.pop();
console.log( last );  // 5;


// get the last item without popping
var a = [1,2,3,4,45,7];
console.log( a[a.length - 1] );
console.log( a[5] );