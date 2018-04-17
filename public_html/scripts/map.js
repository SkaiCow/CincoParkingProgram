$(document).ready(function() {

  //display the spot number pop up then hoved over a free spot
  $(".map-button").hover(function(){
    $(this).children().css("display","block");
  },function(){
    $(this).children().css("display","none");
  })

  $("#addrowbutton").click(function(){addRow();});

});

  function gotolot(lot)
  {
    location.replace("/?p=map&do="+lot);
  }
  function gotohub()
  {
    location.replace("/?p=map");
  }
//just a function to add rows in the database, alter it to what ever you want
  function addRow()
  {
    console.log("i am adding a row now!");
    var values = {
      'x' : 14.3,
      'y' : 28.3,
      'width' : 1,
      'height' : 2.9,
      'spot_num' : 789,
      'num_of_spots' : 42,
      'spacing' : -1.23
    };
    request = $.ajax({
      type: "post",
      url: "/?p=map&do=addRow",
      data: values
    });
    request.done(function (){
      window.location.replace("/?p=map&do=softmorelot");
    });
  }
