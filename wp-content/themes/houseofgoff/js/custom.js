
setTimeout(() => {
    console.log("JAVASCRIPT IS WORKING with setttimeout function");
}, 10000);
$(function() {
    $('#hamburger').on('click', function() {
      $(this).toggleClass('close');
      $('nav').toggleClass('visible');
    });
  });