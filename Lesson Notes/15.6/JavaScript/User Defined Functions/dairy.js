function milkCow(name) {
  console.log('Milk ' + name);
}

function milkCows(cowNames) {
  getDressed();
  getBucket();

  cowNames.forEach(milkCow);
}

function getBucket() {
  console.log('Get a bucket');
}

function getDressed() {
  console.log('Get dressed');
}

function goToChurch() {
  getDressed();
  console.log('Amen!');
}

var cows = ['Spot', 'Fluffy', 'Cowface', 'T-bone'];

milkCows(cows);

// milkCow();
// goToChurch();

