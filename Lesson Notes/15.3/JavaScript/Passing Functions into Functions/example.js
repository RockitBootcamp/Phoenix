var foo = function() {
  console.log('Say hi');
}

var levi = function(ccc, name) {
  ccc();
  console.log(name);
}

var richi = function(xyz) {
  levi(xyz, 'brad');
}




richi(foo);