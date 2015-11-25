// Debugging
var bug = require('debug')
var debug = bug('rockit-express:api:user')

// Database
var db = require('../../lib/db')

// Router
var express = require('express')
var router = express.Router()

// Utility for changing case
var changeCase = require('../../lib/change-case')

// List all users
router.get('/', function(req, res) {
  //debug('GET' + req.path)

  db.selectFile('all-users', function(error, rows, fields) {
    if (error) {
      debug('DB Error', error)
      return res.status(500).send({ error })
    }

    res.json(rows.map(changeCase))
  })
})

// Get user by ID
router.get('/:id', function(req, res) {
  //debug('GET' + req.path)
  var id = req.params.id

  db.selectFile('get-user', {id: id}, function(error, rows) {
    if (error) {
      debug('DB Error', error)
      return res.status(500).send({ error })
    }

    res.json(rows.map(changeCase))
  })
})

// Create a user
router.post('/', function(req, res) {
  //debug('POST' +  req.path + ',' + req.body)
  var values = snakeProps(req.body)

  db.insert('user', values, function(error, id) {
    if (error) {
      debug('DB Error', error)
      return res.status(500).send({ error })
    }

    // Make a URL string
    var uri = req.originalUrl + '/' + id;

    // Redirect
    res.location(uri).status(201).send(uri)

  })

})

module.exports = router
