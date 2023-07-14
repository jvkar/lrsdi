$(document).ready(function() {
    $('a[href^="#"]').on('click', function(event) {
      event.preventDefault();

      var target = $($(this).attr('href'));

      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
      }
    });
  });


