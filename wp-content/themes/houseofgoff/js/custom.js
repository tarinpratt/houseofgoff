
setTimeout(() => {
    console.log("JAVASCRIPT IS WORKING with setttimeout function");
}, 1000);
$(function() {
    $('#hamburger').on('click', function() {
        console.log('clicking');
      $(this).toggleClass('close');
      $('nav').toggleClass('visible');
    });
  });