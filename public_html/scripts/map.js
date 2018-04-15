$(document).ready(function() {

  //display the spot number pop up then hoved over a free spot
  $(".map-button").hover(function(){
    $(this).children().css("display","block");
  },function(){
    $(this).children().css("display","none");
  })



});
  function gotolot(lot)
  {
    location.replace("/?p=map&do="+lot);
  }
  function gotohub()
  {
    location.replace("/?p=map");
  }
