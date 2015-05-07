$(function() { 

var plyrCurLoc = 1;
var plyrPrevLoc = 1;



// Player Directional Move
    var whichDirection = function (buttonElement){
            
      var buttonClickedId = this.id;

      if( buttonClickedId === "up" ){
        // do up stuff
         plyrCurLoc = plyrCurLoc - 5;
      }
      else if( buttonClickedId === 'down' ){
         // do down stuff
         plyrCurLoc = plyrCurLoc + 5;
         onPlyrLnd();

      }
      else if( buttonClickedId === 'right' ){
         // do right stuff
         plyrCurLoc = plyrCurLoc + 1;

      }
      else if( buttonClickedId === 'left' ){
         // do left stuff
         plyrCurLoc = plyrCurLoc - 1;

      }
      // ...
      else {
         // don't know which button was clicked
      }
      onPlyrLnd();
      
      console.log(plyrCurLoc);

    }


// Players landing spot to determine which buttons to disable
    function onPlyrLnd(){
        console.log (" I am working ");
        if(plyrCurLoc == (1)) {
          $('#up').prop('disabled', true);
          $('#left').prop('disabled', true);
        }
        if(plyrCurLoc == (2 || 3 || 4)){
            $('#up').prop('disabled', true);
            $('#left').prop('disabled', false);
            $('#right').prop('disabled', false);
            $('#down').prop('disabled', false);
        }
        if (plyrCurLoc === (5)){
            $('#right').prop('disabled', true);
            $('#up').prop('disabled', true);
            $('#down').prop('disabled', false);
            $('#left').prop('disabled', false);
        }
        if (plyrCurLoc == (6 || 11 || 16)){
            $('#left').prop('disabled', true);
            $('#up').prop('disabled', false);
            $('#right').prop('disabled', false);
            $('#down').prop('disabled', false);

        }
        if (plyrCurLoc == (10 || 15 || 20)){
            $('#right').prop('disabled', true);
            $('#left').prop('disabled', false);
            $('#up').prop('disabled', false);
            $('#down').prop('disabled', false);

        }
        if (plyrCurLoc == (21)){
            $('#down').prop('disabled', true);
            $('#left').prop('disabled', true);
            $('#up').prop('disabled', false);
            $('#right').prop('disabled', false);
        }
        if (plyrCurLoc == (22 || 23 || 24)){
            $('#down').prop('disabled', true);
            $('#left').prop('disabled', false);
            $('#up').prop('disabled', false);
            $('#right').prop('disabled', false);
        }
        if (plyrCurLoc == (25)){
            $('#right').prop('disabled', true);
            $('#down').prop('disabled', true);
            $('#left').prop('disabled', false);
            $('#up').prop('disabled', false);
            
        }      
        if (plyrCurLoc == (7 || 8 || 9 || 12 || 13 || 14 || 17 || 18 || 19)){
            $('#right').prop('disabled', false);
            $('#down').prop('disabled', false);
            $('#left').prop('disabled', false);
            $('#up').prop('disabled', false);
            
        } 
    }

    console.log(plyrCurLoc);








onPlyrLnd();
$('#up').on('click', whichDirection);
$('#down').on('click', whichDirection);
$('#right').on('click', whichDirection);
$('#left').on('click', whichDirection);




});







    










