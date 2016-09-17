$(document).ready(function() {
  $(".sidebar-list").each(function() {
    checkChildren($(this));
  });
  var checks = 0;
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
  $("#add-button").click(function() {
    var add_group = $("#add-group");
    add_group.css('top', '15%');
    add_group.show();
  });
});

function checkChildren(ul) {
  var checked = false;
  ul.children().find('.sidebar-check').each(function() {
    if($(this).is(":checked")) checked = true;
  });
  if(checked) ul.parent().find('.sidebar-title').css('color', '#449d44');
  else ul.parent().find('.sidebar-title').css('color', '#333');
}
