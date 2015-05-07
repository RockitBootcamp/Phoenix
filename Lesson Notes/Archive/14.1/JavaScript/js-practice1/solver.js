var superSolver = {
    // my constants
    myPI: 3.1415,

    // simple math
    add: function(a,b) { return a+b; },
    sub: function(a,b) { return a-b; },
    mult: function(a,b) { return a*b; },
    div: function(a,b) { return a/b; },
    intDiv: function(a,b) { return Math.floor(a/b); },
    exp: function(a,b) { return Math.pow(a,b); },

    // less simple math
    factorial: function(num) {
        var accum = 1;
        for(var i=1; i<=num; i++) {
            accum *= i;
        }
        return accum;
    },

    // geometry
    squareArea: function(width) { return width*width; },
    rectArea: function(height, width) { return width*height; },
    circleD: function(r) { return Math.PI*2*r; },
    circleArea: function(r) { return Math.PI*r*r; },

}

function runTestOneArg(testFunc, refFunc, p) {
    var expected = refFunc(p);
    var actual = testFunc(p);
    return [(expected === actual), expected, actual];
}

function runTestTwoArgs(testFunc, refFunc, p1, p2) {
    var expected = refFunc(p1, p2);
    var actual = testFunc(p1, p2);
    return [(expected === actual), expected, actual];
}

var tests = [
    ['add', rand(),rand()],
    ['sub', rand(),rand()],
    ['mult', rand(),rand()],
    ['div', rand(),rand()],
    ['exp', rand(),rand()],
    ['factorial', rand()],
    ['squareArea', rand()],
    ['rectArea', rand(),rand()],
    ['circleD', rand()],
    ['circleArea', rand()],
];



function runAllTests() {
    resultsPane.innerHTML = '';
    tests.forEach(function(test) {
        var func = test[0];
        var result;
        var params;
        var extraInfo;
        var resultClass;
        try {
            if(test.length == 2) {
                result = runTestOneArg(testSolver[func], superSolver[func], test[1]);
                params = [test[1]];
            } else if(test.length == 3) {
                result = runTestTwoArgs(testSolver[func], superSolver[func], test[1], test[2]);
                params = [test[1], test[2]];
            } else {
                alert ('here now');
                alert("invalid test has " + (test.length-1) + " arguments");
            }
            if(result[0]) {
                resultClass = 'pass';
                extraInfo = ' = ' + result[1];
            } else {
                resultClass = 'fail';
                extraInfo = ' expected: ' + result[1] + ', but got: ' + result[2];
            }
            resultsPane.innerHTML += '<div class="'+resultClass+'">' + func + '(' + params.join(',') + ')' + extraInfo + '</div>'; 
        } catch(e) {
            resultClass = 'fail';
            extraInfo = 'method: ' + func + '() is not implemented';
            resultsPane.innerHTML += '<div class="'+resultClass+'">' + func + '() is not implemented</div>'; 
        }
        
    });   
}

function randInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

function rand() {
    return randInt(1,10);
}