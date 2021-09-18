(function ($) {
  wp.customize('front_page_tagline', function (value) {
    value.bind(function (newval) {
      $('#tagline').html(newval);
    });
  });
  
  wp.customize('phone', function (value) {
    value.bind(function (newval) {
      $('#phone').html(newval);
    });
  });
  
  wp.customize('address', function (value) {
    value.bind(function (newval) {
      $('#address').html(newval);
    });
  });
  
  wp.customize('postal_address', function (value) {
    value.bind(function (newval) {
      $('#postalAddress').html(newval);
    });
  });
})(jQuery);
