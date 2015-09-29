function wakeUp() {
  console.log('Get UP!');
}

function shower() {
  console.log('Take a shower, you stink');
}

function brushTeeth() {
  console.log('Brush teeth');
}

function dailyRoutine(name) {
  console.log('Good morning ' + name);
}

var people = ['EZ', 'Dre', 'Ice'];
// console.log(''+people);

function ghettoBird(peopleNames) {
  wakeUp();
  shower();
  brushTeeth();

  peopleNames.forEach(dailyRoutine);
}

ghettoBird(people);
