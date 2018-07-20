window.onload = function() {
  $('#request').click(function() {
    var val = $('[name=location]').val();
    console.log(val);

    $.ajax({
      type: "GET",
      url: "/endpoint.php",
      data: "location=" + val,
      dataType: 'json',
      success: function(res){
        if (res['description']['text']) {
          $('#result').text(res['description']['text']);
        } else {
          $('#result').text('エラー');
        }
      }
    });
  });
};
