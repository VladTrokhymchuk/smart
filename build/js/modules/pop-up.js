  //open popup
  $('.cd-popup-trigger').on('click', function(event) {
    event.preventDefault();
    $('.cd-popup.head-popup').addClass('is-visible');
});

//open footer
// var wpcf7Elm = $('.wpcf7');
// $(wpcf7Elm).on('wpcf7mailsent', function(event) {
//     event.preventDefault();
//     $('.cd-popup.foot-popup').addClass('is-visible');
//     $('.cd-popup.popup-office').removeClass('is-visible');
// });


//open popup office
// $('.cd-popup-trigger-office').on('click', function(event) {
//     event.preventDefault();
//     $('.cd-popup.popup-office').addClass('is-visible');
// });

//close popup
// $('.cd-popup').on('click', function(event){
//   // if( $(event.target).is('.cd-popup-close') || $(event.target).is('.cd-popup') || $('.button__orange-animate') )
//   if( $(event.target).is('.cd-popup-close') || $(event.target).is('.cd-popup') || $('.button__orange-animate') ) {
//     event.preventDefault();
//     $(this).removeClass('is-visible');
//   }
// });

$('.cd-popup-close').on('click', function(event) {

    event.preventDefault();
    $('.cd-popup').removeClass('is-visible');

});


$('.hamburger__box').on('click', function(event) {

    event.preventDefault();
    $('.cd-popup').removeClass('is-visible');

});


//close popup when clicking the esc keyboard button
$(document).keyup(function(event) {
    if (event.which == '27') {
        $('.cd-popup').removeClass('is-visible');
    }
});