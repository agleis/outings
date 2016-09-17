$(document).ready(function() {
  $("#private").click(function() {
    $("#selects-groups").show(300);
  });
  $("#public").click(function() {
    $("#selects-groups").hide(300);
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
