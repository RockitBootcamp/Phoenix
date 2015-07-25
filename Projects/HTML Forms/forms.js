var express = require('express');
var app = express();
var bodyParser = require('body-parser');
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }));



app.get('/', function (req, res) {
  res.send('Welcome to HTML Forms');
});

app.post('/ch1', function (req, res) {
    var result = {result: 'Failed', message: "UNKNOWN"};

    // Ensure req.body has firstName input
    if(req.body.firstName && req.body.firstName.length > 0){
        result.result = "Success";
        result.message = "First name is '" + req.body.firstName + "'";
        result.req = req.body;
    }
    else {
        result.result = "Failed";
        result.message = "firstName not found or didn't have a value. Ensure the name of the input is 'firstName'";   
    }
    
    res.json(result);
});

// app.post('/ch2', function (req, res) {
//     var result = {result: 'Failed', message: "UNKNOWN"};

//     // Ensure req.body has firstName input
//     if(req.body.lastName && req.body.lastName.length > 0){
//         result.result = "Success";
//         result.message = "Last name is '" + req.body.lastName + "'";
//         result.req = req.body;
//     }
//     else {
//         result.result = "Failed";
//         result.message = "lastName not found or didn't have a value. Ensure the name of the input is 'lastName'";   
//     }
    
//     res.json(result);
// });

app.post('/ch2', function (req, res) {
    var result = {result: 'Failed', message: "UNKNOWN"};

    // Ensure req.body has firstName input
    if(req.body.password && req.body.password.length > 0){
        result.result = "Success";
        result.message = "Password '" + req.body.password + "'";
        result.req = req.body;
    }
    else {
        result.result = "Failed";
        result.message = "password not found or didn't have a value. Ensure the name of the input is 'password'";   
    }
    
    res.json(result);
});

app.post('/ch3', function (req, res) {
    var result = {result: 'Failed', message: "UNKNOWN"};

    // Ensure req.body has firstName input
    if(req.body.giraffe && req.body.giraffe.length > 0){
        result.result = "Success";
        result.message = "Giraffe '" + req.body.giraffe + "'";
        result.req = req.body;
    }
    else {
        result.result = "Failed";
        result.message = "giraffe not found or didn't have a value. Ensure the name of the input is 'giraffe'";   
    }
    
    res.json(result);
});

app.post('/ch4', function (req, res) {
    var result = {result: 'Failed', message: "UNKNOWN"};

    // Ensure req.body has firstName input
    if(req.body.hairColor && req.body.hairColor.length > 0){
        result.result = "Success";
        result.message = "hairColor '" + req.body.hairColor + "'";
        result.req = req.body;
    }
    else {
        result.result = "Failed";
        result.message = "hairColor not found or didn't have a value. Ensure the name of the input is 'hairColor'";   
    }
    
    res.json(result);
});


app.post('/ch5', function (req, res) {
    var result = {result: 'Failed', message: "UNKNOWN"};

    // Ensure req.body has firstName input
    if(req.body.secret && req.body.secret.length > 0){
        result.result = "Success";
        result.message = "secret '" + req.body.secret + "'";
        result.req = req.body;
    }
    else {
        result.result = "Failed";
        result.message = "secret not found or didn't have a value. Ensure the name of the input is 'secret'";   
    }
    
    res.json(result);
});

app.post('/ch6', function (req, res) {
    var result = {result: 'Failed', message: "UNKNOWN"};

    // Ensure req.body has firstName input
    if(req.body.state && req.body.state.length > 0){
        result.result = "Success";
        result.message = "state '" + req.body.state + "'";
        result.req = req.body;
    }
    else {
        result.result = "Failed";
        result.message = "state not found or didn't have a value. Ensure the name of the input is 'state'";   
    }
    
    res.json(result);
});

app.post('/ch7', function (req, res) {
    var result = {result: 'Failed', message: "UNKNOWN"};

    // Ensure req.body has firstName input
    if(req.body.age && req.body.age.length > 0){
        result.result = "Success";
        result.message = "age '" + req.body.age + "'";
        result.req = req.body;
    }
    else {
        result.result = "Failed";
        result.message = "age not found or didn't have a value. Ensure the name of the input is 'age'";   
    }
    
    res.json(result);
});

app.post('/ch8', function (req, res) {
    var result = {result: 'Failed', message: "UNKNOWN"};

    // Ensure req.body has firstName input
    if(req.body.height && req.body.height.length > 0){
        result.result = "Success";
        result.message = "height '" + req.body.height + "'";
        result.req = req.body;
    }
    else {
        result.result = "Failed";
        result.message = "height not found or didn't have a value. Ensure the name of the input is 'height'";   
    }
    
    res.json(result);
});

app.post('/ch9', function (req, res) {
    var result = {result: 'Failed', message: "UNKNOWN"};

    // Ensure req.body has firstName input
    if(req.body.birthday && req.body.birthday.length > 0){
        result.result = "Success";
        result.message = "birthday '" + req.body.birthday + "'";
        result.req = req.body;
    }
    else {
        result.result = "Failed";
        result.message = "birthday not found or didn't have a value. Ensure the name of the input is 'birthday'";   
    }
    
    res.json(result);
});

app.post('/ch10', function (req, res) {
    var result = {result: 'Failed', message: "UNKNOWN"};

    // Ensure req.body has firstName input
    if(req.body.birthday && req.body.birthday.length > 0){
        result.result = "Success";
        result.message = "birthday '" + req.body.birthday + "'";
        result.req = req.body;
    }
    else {
        result.result = "Failed";
        result.message = "birthday not found or didn't have a value. Ensure the name of the input is 'birthday'";   
    }
    
    res.json(result);
});

var server = app.listen(3000, function () {
  var host = server.address().address;
  var port = server.address().port;

  console.log('Example app listening at http://%s:%s', host, port);
});