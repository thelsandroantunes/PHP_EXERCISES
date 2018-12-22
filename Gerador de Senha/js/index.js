$('input[type="submit"]').on('focus', function () {
  $('*').addClass('off');
}).on('focusout', function () {
  $('*').removeClass('off');
});;
