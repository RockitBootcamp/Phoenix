var arr = [1,2,3,4,5,6,7,8,9]

// "for" loop

// for (var i =0; i < arr.length; i++) {
//   console.log(arr[i])
// }


// for (var i =0; i < arr.length; i++) {
//   // console.log(arr[i])
//   console.log(arr.pop())
// }

// var len = arr.length
// for (var i =0; i < len; i++) {
//   // console.log(arr[i])
//   console.log(arr.pop())
// }



// Array.forEach

// arr.forEach(function (number) {
//   console.log(number)
// })


// arr.forEach(function (number, i) {
//   console.log(number, i)
// })


// arr.forEach(function (number, i, array) {
//   console.log(number, i, array)
//   array.push(i)
// })


// while

// var len = arr.length
// var i = 0

// while (i < len) {
//   console.log(arr[i++])
// }

// var i = arr.length

// while (i--) {
//   console.log(arr[i])
// }


// var arrRev = arr.reverse()
// var i = arr.length

// while (i--) {
//   console.log(arrRev[i])
// }


var people = [
  {
    name: 'Richi'
  },
  {
    name: 'Karla'
  },
  {
    name: 'Duane'
  },
  {
    name: 'Levi'
  },
  {
    name: 'Ryan'
  },
  {
    name: 'Keith'
  }
]

var ages = [23, 22, 34, 20, 28, 32]

// ages.forEach(function (age) {
//   console.log(age)
// })

// people.forEach(function (person, i) {
//   console.log(person, i)
  // people[i].age = ages[i]
// })

// people.forEach(function (person, i) {
//   console.log(person, i)
//   person.age = ages[i]
// })

// console.log(people)


// team = {}
// team.name = 'bob'



// var people = [
//   {
//     name: 'Richi'
//   },
//   {
//     name: 'Karla'
//   },
//   {
//     name: 'Duane'
//   },
//   {
//     name: 'Levi'
//   },
//   {
//     name: 'Ryan'
//   },
//   {
//     name: 'Keith'
//   }
// ]

// var something = [
//   {
//     asleep: true
//   },
//   {
//     asleep: false
//   },
//   {
//     asleep: true
//   },
//   {
//     asleep: false
//   },
//   {
//     asleep: true
//   },
//   {
//     asleep: false
//   },
//   {
//     asleep: true
//   }
// ]

// people.forEach(function (person, i) {
//   person.asleep = something[i].asleep
// })

// console.log(people)




var people = [
  {
    name: 'Richi',
    id: 1
  },
  {
    name: 'Karla',
    id: 2
  },
  {
    name: 'Duane',
    id: 3
  },
  {
    name: 'Levi',
    id: 4
  },
  {
    name: 'Ryan',
    id: 5
  },
  {
    name: 'Keith',
    id: 6
  }
]

var sleepy = [
  {
    asleep: 'maybe',
    userId: 6
  },
  {
    asleep: 'huh?',
    userId: 5
  },
  {
    asleep: true,
    userId: 4
  },
  {
    asleep: 'probably',
    userId: 3
  },
  {
    asleep: 'yes',
    userId: 2
  },
  {
    asleep: false,
    userId: 1
  }
]

// end result should look like this
// {
//   name: 'Keith'
//   asleep: 'maybe',
//   id: 6
// }

// people.forEach(function (person) {

//     sleepy.forEach(function (tired) {
//       if (person.id === tired.userId) {
//         person.asleep = tired.asleep
//       }
//     })

// })

// console.log(people)



var animals = [
  {
    type: 'dog'
  },
  {
    type: 'cat'
  },
  {
    type: 'Charmander'
  }
]

var colors = [
  {
    forType: 'dog',
    color: 'purple'
  },
  {
    forType: 'cat',
    color: 'rainbow'
  },
  {
    forType: 'Charmander',
    color: 'awesome'
  }
]

console.log(animals)
console.log(colors)
animals.forEach(function (animal) {
  console.log(animal)
  colors.forEach(function (animalColor) {
    console.log(animalColor)
    console.log(animal.type === animalColor.forType)
    if (animal.type === animalColor.forType) {
      animal.color = animalColor.color
    }
    console.log(animal)
  })
})

console.log(animals)
