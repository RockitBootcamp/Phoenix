$(function() {
  
    $('div.tank').click(function(){
        console.log('Boom')
    })

    $('div.tank').on('click', function(){
        console.log('Bam')
    })

    $('div.tank').on('mouseover', function(){
        console.log('a hit!')
    })

    $('.message').on('keydown', function(e){

        // Challenge when you press K echo 'KILL'
        if(e.keyCode == 75) {
            console.log("Kill");    
        } else  if(e.keyCode == 83) {
            console.log("Shoot");    
        }
        
        // Challenge
        // On down arrow ... move tank down 50px
        // Where am I now??
        var cur_top = $('.tank').position().top;

        $('.tank').css({top:cur_top+50})

    })

    $('.message').on('keyup', function(e){
        $('.message').val("");
    })

    $('form').on('submit', function(){
        console.log('Submit')
    })

    // CHallenge 
    // When you click a mine ... echo the Text of the mine

    $('.mine').on('click', function(){

        var text = $(this).text()
        console.log(text)

    })



});