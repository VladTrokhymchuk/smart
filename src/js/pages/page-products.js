$(document).ready(function () {
    var $btns = $('.tab').click(function () {
      if (this.id == 'all') {
        $('#parent > a').fadeIn(300);
      } else {
        var $el = $(`[data-type='${this.id}']`).fadeIn(300);
        console.log($el)
        $('#parent > a').not($el).fadeOut(300);
      }
      $btns.removeClass('active');
      $(this).addClass('active');
    })
  });