window.onload = function() {
  $('#move').click(function() {
    var ball = $('#ball');
    if (ball.css('margin-left') == '0px') {
      ball.animate({'margin-left': '200px'}, 1500);
    } else if (ball.css('margin-left') == '200px') {
      ball.animate({'margin-left': '0px'}, 1500);
    }
  });
};
