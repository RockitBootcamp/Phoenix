// var string = 'Hello, my name is ____';

// name = 'Kevin';

// var finalString = string.replace(/_+/, name);

// console.log(finalString);

// var string2 = 'Hello, ____ my name is ____';

// var finalString2 = string2.replace(/_+/g, name);

// console.log(finalString2);



// var string3 = 'Giraffes have aroused the curiosity of ____ since early times.'

// var pluralNoun = 'dogs';

// var result = string3.replace(/_+/, pluralNoun);

// console.log(result);



// function replacer(str) {
//   return function (name, name2) {
//     var res = str.replace(/\{\{name\}\}/g, name);
//     return res.replace('{{name2}}', name2);
//   }
// }

// var greet = replacer('Hello, {{name}} and {{name2}}');

// console.log(greet('Bob', 'Krusty'));
// console.log(greet('Zim', 'Gir'));



var tmpl = $('#form-template').text();
console.log(tmpl);

var greet = Handlebars.compile(tmpl);
// var greet = Handlebars.compile('Hello, {{blank}}');

console.log(greet({ name: 'Bart' }));

$('form').on('submit', function(){
  var name = $('input').val()
  var greeting = greet({ name: name });
  $('body').append(greeting);
  return false;
})
