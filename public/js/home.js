$(document).ready(function() {
  var total_checked = 0;
  $(".sidebar-list").each(function() {
    total_checked += checkChildren($(this));
  });
  var checks = total_checked;
  $(".sidebar-title").click(function() {
    var ul = $(this).parent().find("ul");
    ul.toggle(200);
    var glyph_right = $(this).find('.glyphicon-chevron-right');
    var glyph_down = $(this).find('.glyphicon-chevron-down');
    glyph_right.removeClass('glyphicon-chevron-right');
    glyph_right.addClass('glyphicon-chevron-down');
    glyph_down.removeClass('glyphicon-chevron-down');
    glyph_down.addClass('glyphicon-chevron-right');
  });
  $(".sidebar-check").click(function() {
    if($(this).is(":checked")) checks++;
    else checks--;
    if(checks > 0) {
      $("#sidebar-button").show(300);
      $(".sidebar-btn-placeholder").slideDown(400);
      $(".sidebar-btn-placeholder").height(30);
      checkChildren($(this).parent().parent());
    }
    else {
      $("#sidebar-button").hide(300);
      $(".sidebar-btn-placeholder").slideUp(400);
      $(".sidebar-btn-placeholder").height(10);
      checkChildren($(this).parent().parent());
    }
  });
  $("#add-trip").click(function() {
    if($(this).html() == '<span class="glyphicon glyphicon-leaf"></span>') location.href="/trip";
    $(this).html('<span class="glyphicon glyphicon-leaf"></span>');
    var add_group = $("#add-group-group");
    $(".upload-button").find("label").show();
    add_group.css('margin-bottom', '18%');
    add_group.show();
  });
  $("#add-trip").focusout(function() {
    $(this).html('<span class="glyphicon glyphicon-plus"></span>');
    var add_group = $("#add-group-group");
    $(".upload-button").find("label").hide();
    add_group.css('margin-bottom', '10%');
    add_group.hide();
  });
});

function checkChildren(ul) {
  var checked = false;
  var num_checked = 0;
  ul.children().find('.sidebar-check').each(function() {
    if($(this).is(":checked")) {
      num_checked++;
      checked = true;
    }
  });
  if(checked) ul.parent().find('.sidebar-title').css('color', '#00B050');
  else ul.parent().find('.sidebar-title').css('color', '#333');
  return num_checked;
}
