function setToFinished()
{
  $("done-wait-container").css("display","none");
  $("done-confirmed-container").css("display","block");
}

function askForApproval()
{
  window.location = "/?p=students&do=askforapproval";
}
