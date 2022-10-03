$(function(){

var sidebar = $(".sidebar");
var footer = $("#about_t");
var Top_Max_Position = sidebar.offset().top;//(665.5)
$(window).scroll(function()
{ var position = $(window).scrollTop()+300 - Top_Max_Position;//positionがrelativeだから
  var Bottom_Max_Position = footer.offset().top;
  var Max_Top = Bottom_Max_Position - Top_Max_Position - 270;
  if(position<0)
  position=0;
  else if(position>Max_Top)
  position=Max_Top;
  sidebar.stop().animate({top:position},500);
});


});
//style="width:expression( document.body.clientWidth);"
