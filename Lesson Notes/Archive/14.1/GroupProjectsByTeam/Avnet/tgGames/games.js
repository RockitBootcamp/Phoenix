$(function() {

  var newGame = {};

  $('#test').click(function(){
    console.log("submit was clicked");
    var gTitle = ($(".title").val());
    var gDetails = ($(".details").val());
    var spangrab = ($('span'));
    var pgrab = ($('p'));

    spangrab.remove();
    pgrab.remove();

      // validate title
      if (gTitle){ 
        newGame.gTitle=gTitle;
      } else {
        newGame.gTitle=null;
        $('.title').after('<p>Please provide a name for your game</p>');
      }

      // validate details
      if (gDetails.length > 0 && gDetails.length < 500){
          newGame.gDetails=gDetails;
          $('.details').after('');
        } else {
          newGame.gDetails=null;
          $('.details').after('<p>Please provide a description between 1 and 500 characters</p>');
        }

      // roll through each item in the newGame obj
      for(key in newGame) {
        var columnName = newGame[key];
        console.log(columnName);
        // test if each item in object exists... if not return false and prevent php submit
        if (columnName == null) {
          return formValidation(false);
        }
      }
      // return formVal true if the object props are good...
      return formValidation(true);

  });

});

// When the submit button is clicked a false return will kill the submission
var formValidation = function(returnVal) {
  if (returnVal == false){
    console.log("we got to this falsy point");
  return false;
  } else {
    console.log("we got to a truthy point");
  return true;
  }
}