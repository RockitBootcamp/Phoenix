console.log('I like pizza'.replace(/\w+ (\w+)$/, function (match, match2) {
  return match.replace(match2, 'beer')
}))

console.log('I am a string'.match('am.*g'))

console.log((/(str)?ing/).test('I am a ing'))

console.log((/^http:\/\/\w+\.[a-z]{2,3}$/).test('http://something.sdf'))
