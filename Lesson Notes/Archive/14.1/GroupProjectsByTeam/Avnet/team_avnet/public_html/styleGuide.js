$(function() {
/*Remember to make it the ".loginHeader form" "display: inline" not "show"*/

var resetHeader = function() {
    $('.loginHeader form').hide();
    $('.registerModal').hide();
    $('.loginHeader .loginButton').removeClass('secondaryButton');
}

var stopBubbling = function() {
    event.stopPropagation();
}


$('.loginHeader .loginButton').on('click', function() {
    resetHeader();
    $('.loginHeader form').show();
    $('.loginHeader .loginButton').addClass('secondaryButton');
})

$('.loginHeader a').on('click', function() {
    resetHeader();
    $('.forgotPasswordModal').show();
})

$('.registerButton').on('click', function() {
    resetHeader();
    $('.registerModal').show();
})

$('.registerModal .cancelButton').on('click', function() {
    resetHeader();
    $('.registerModal').hide();
})

$('.forgotPasswordModal .cancelButton').on('click', function() {
    resetHeader();
    $('.forgotPasswordModal').hide();
})

$('.modal').on('click', function() {
    resetHeader();
})

$('.registerModal form').on('click', function() {
    stopBubbling();
})

$('.menuToggle').on('click', function() {
    var menu = $('.menu').css('display');
    if (menu == 'none'){
        $('.menu').show();
        $('.menuToggle').addClass('activeNav');
    }
    else{
       $('.menu').hide(); 
       $('.menuToggle').removeClass('activeNav');
    }
})













































});