$(document).ready(function() {
  $(".approve-yes").click(function(){
    var id = $(this).attr('id');
    approve(id);
  });
});

function approve(id)
{
  console.log(id);
  var values = {'student_id' : id};
  request = $.ajax({
    type: "post",
    url: "/?p=approve&do=approve",
    data: values
  });
  request.done(function(){
    window.location.replace("/?p=approve");
  });
}
