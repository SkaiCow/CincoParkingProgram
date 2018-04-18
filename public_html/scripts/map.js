$(document).ready(function() {

  //display the spot number pop up then hoved over a free spot
  $(".map-button").hover(function(){
    $(this).children().css("display","block");
  },function(){
    $(this).children().css("display","none");
  })

  $("#addrowbutton").click(function(){addRow();});
  $("#editrowbutton").click(function(){editRow();});

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
      'x' : 77,
      'y' : 61,
      'width' : 1,
      'height' : 2.9,
      'spot_num' : 1045,
      'num_of_spots' : 52,
      'spacing' : -1.23
    };
    request = $.ajax({
      type: "post",
      url: "/?p=map&do=addRow",
      data: values
    });
    request.done(function (){
      window.location.replace("/?p=map&do=sophomorelot");
    });
  }

  function editRow()
  {
    console.log("i am editing rows now!");
    var values = {
      'start' : 1045,
      'finish' : 1096,
      'x_add' : 0,
      'y_add' : 0,
      'width_add' : -.4,
      'height_add' : -.1,
      'spacing' : 1.7
    };
    request = $.ajax({
      type: "post",
      url: "/?p=map&do=editRow",
      data: values
    });
    request.done(function (){
      window.location.replace("/?p=map&do=sophomorelot");
    });
  }
