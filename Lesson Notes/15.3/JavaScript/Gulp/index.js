function longestPal(string) {
  var longest = '';

  string.split('').forEach(function (chr, idx) {
    var substr = string.slice(idx, string.lastIndexOf(chr) + 1);
    if (isPal(substr) && substr.length > longest.length)
      longest = substr;
  });

  return longest;
}

var string = 'this is a string';

var obj = {
  name: 'Joe'
};

