$(function() {
    let path = window.location.href;

    $('#nav li a').each(function() {
     if (this.href === path) {
      $(this).addClass('active');
     }
    });
  });