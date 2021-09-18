(function ($) {
  wp.customize('front_page_tagline', function (value) {
    value.bind(function (newval) {
      $('#tagline').html(newval);
    });
  });
})(jQuery);
