$(document).ready(function() {

  //display the spot number pop up then hoved over a free spot
  $(".map-button").hover(function(){
    $(this).children().css("display","block");
  },function(){
    $(this).children().css("display","none");
  });

  $(".map-button").click(function(){
    helpme($(this).attr('id'));
  });
});

  function helpme(spot_num)
  {
    console.log("i am going to take spot: "+spot_num);
    var values = {'spot_num' : spot_num};
    request = $.ajax({
      type: "post",
      url: "/?p=map&do=requestspot",
      data: values
    });
    request.done(function(){
      window.location.replace("/?p=students&do=done");
    });
  }
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
      'x' : 57.47,
      'y' : 87.6,
      'width' : 1.4,
      'height' : 3,
      'spot_num' : 701,
      'num_of_spots' : 22,
      'spacing' : 1.73,
      'lot' : "seniorlot"
    };
    request = $.ajax({
      type: "post",
      url: "/?p=map&do=addRow",
      data: values
    });
    request.done(function (){
      window.location.replace("/?p=map&do="+values['lot']);
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

  function takeSpot()
  {
    console.log("i am editing rows now!");
    var values = {
      'start' : 30,
      'finish' : 30
    };
    request = $.ajax({
      type: "post",
      url: "/?p=map&do=takespots",
      data: values
    });
    request.done(function (){
      window.location.replace("/?p=map");
    });
  }

  function openSpot()
  {
    console.log("i am opening spots now!");
    var values = {
      'start' : 1014,
      'finish' : 1029
    };
    request = $.ajax({
      type: "post",
      url: "/?p=map&do=openspot",
      data: values
    });
    request.done(function (){
      window.location.replace("/?p=map");
    });
  }
