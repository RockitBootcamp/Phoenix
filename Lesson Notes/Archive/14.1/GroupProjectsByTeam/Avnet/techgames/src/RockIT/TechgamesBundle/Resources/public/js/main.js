$(function() {
  

    $('.gm').popover({

        placement:'auto right', 
        trigger:'hover', 
        delay:{ show: 1000, hide: 100 }, 
        html: true,
        title: function(e){
            return $('.title', this).text();
        },
        content: function(e){

            // Populate popup with data from data-content element
            // var desc = $('.desc', this).text();
            // var tbl = $('table', this).clone().wrap('<div></div>').parent().html();

            var html = $('.data-content', this).html();

            if(html){
                return html;
            }
            else
            {
                return $('.gm-popup').html();
            }
           
        }
    });


});