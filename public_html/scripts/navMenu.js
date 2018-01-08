$(document).ready(function() {
  //sorry ill try to make everything readable
  $(".menu-nav-container").hover(
    function()
    {
      //begin the hover animate
      //rotate top 45deg
      $({rot: 0}).animate({rot: -45},{
        duration: 100,
        step: function()
        {
          $("#nav-top").css({"-webkit-transform":"rotate("+this.rot+"deg)",
        "transform:":"rotate("+this.rot+"deg)"});
        //change width and position
        $("#nav-top").animate({width: '65%',left: '-9px',top: '19px'},100);
        }
      });

      //same thing but for bot bar
      $({rot: 0}).animate({rot: 45},{
        duration: 100,
        step: function()
        {
          $("#nav-bot").css({"-webkit-transform":"rotate("+this.rot+"deg)",
        "transform:":"rotate("+this.rot+"deg)"});
        //change width and position
        $("#nav-bot").animate({width: '65%',left: '-9px',top: '45px'},100);
        }
      });
    },function()
    {
      $({rot: -45}).animate({rot: 0},{
        duration: 100,
        step: function()
        {
          $("#nav-top").css({"-webkit-transform":"rotate("+this.rot+"deg)"});
        }
      });
      $("#nav-bot").animate({top: '54px'},100);
    }
  );
});
