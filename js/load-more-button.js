$(document).ready(function () {
  size_div = $("#myList div").size();
  x=8;

  $('#myList div:lt('+x+')').show();
  $("#showLess").hide();
  $('#loadMore').click(function () {
    x= (x+8 <= size_div) ? x+8 : size_div;
    $('#myList div:lt('+x+')').show();
    $(this).toggle(x < size_div);
    $("#showLess").show();
  });
  $('#showLess').click(function () {
    x=(x-8<0) ? 8 : x-8;

    if (x <= 4) {
      $('#myList div').not(':lt(8)').hide();
    } else {
      $('#myList div').not(':lt('+x+')').hide();
    }

    $('#loadMore').toggle(x < size_div);
    $(this).toggle(x > 8);
  });
});
