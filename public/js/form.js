$(document).ready(function() {
  $(".trigger").click(function() {
    $("#selects-show").show(300);
  });
  $(".untrigger").click(function() {
    $("#selects-show").hide(300);
  });
  $('#group-select').change(function() {
    var value = $(this).val();
    if(value == "new")
      $("#new-group").show(300);
    else {
      $("#new-group").hide(300);
    }
  });
});
