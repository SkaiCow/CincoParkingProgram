$(document).ready(function() {

  //display the spot number pop up then hoved over a free spot
  $(".map-button").hover(function(){
    $(this).children().css("display","block");
  },function(){
    $(this).children().css("display","none");
  });

  $(".map-button").click(function(){
    console.log("i am going to take spot: "+$(this).attr('id'));
    var values = {'spot_num' : $(this).attr('id')};
    request = $.ajax({
      type: "post",
      url: "/?p=map&do=requestSpot",
      data: values
    });
    request.done(function(){
      //window.location.replace("/?p=students&do=done");
    });
  });
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
//why are they down here and not up in the jquery stuff? no reason, add it if you realy want to use  these commands in admin
  function addRow()
  {
    console.log("i am adding a row now!");
    var values = {
      'x' : 47.31,
      'y' : 77.3,
      'width' : 1.7,
      'height' : 5.8,
      'spot_num' : 1289,
      'num_of_spots' : 8,
      'spacing' : 2.03
    };
    request = $.ajax({
      type: "post",
      url: "/?p=map&do=addRow",
      data: values
    });
    request.done(function (){
      window.location.replace("/?p=map&do=paclot");
    });
  }

  function editRow()
  {
    console.log("i am editing rows now!");
    var values = {
      'start' : 1192,
      'finish' : 1204,
      'x_add' : 0,
      'y_add' : 6.8,
      'width_add' : 0,
      'height_add' : 0,
      'spacing' : 0
    };
    request = $.ajax({
      type: "post",
      url: "/?p=map&do=editRow",
      data: values
    });
    request.done(function (){
      window.location.replace("/?p=map&do=athleticlot");
    });
  }
