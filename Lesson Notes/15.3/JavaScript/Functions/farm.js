var milkCow = function (name) {
  console.log('milk ' + name + ', bro')
}

var getBucket = function () {
  console.log('get a bucket')
}

var getDressed = function () {
  console.log('put on some clothes, weirdo')
}

var goToChurch = function () {
  getDressed()
  console.log('go to church')
}

// goToChurch()

var cows = ['Betsy', 'Bell', 'Spot', 'Alice']

function startMilking() {
  getDressed()
  getBucket()
  cows.forEach(milkCow)
}

var today = 'Sunday'

if (today == 'Sunday') {
  goToChurch();
} else {
  startMilking();
}

