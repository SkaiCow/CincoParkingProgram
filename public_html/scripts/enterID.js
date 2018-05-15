$(document).ready(function() {

  $(".enterID-kick").click(function(){
    console.log("ya this is going");
    var values = {'student_id' : $(this).attr('id')};
    request = $.ajax({
        url: "/?p=enterID&do=kick",
        type: "post",
        data: values
    });
    request.done(function(response){
      window.location.replace("/?p=enterID");
    });
  });

});
