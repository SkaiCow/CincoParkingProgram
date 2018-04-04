$(document).ready(function() {
  $("#enterid-form").on("submit", function(event){
    event.preventDefault()
  });

  $(document).on("click", ".login-button", function() {
    request = $.ajax({
        url: "Admin/?p=login&do=login",
        type: "post",
        data: $('#ID').val();
    });
    request.done(function(response){
      console.log("hey this works: "+response);
    });
  });

});
