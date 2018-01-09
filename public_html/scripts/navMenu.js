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
        //$("#nav-top").animate({width: '65%',left: '-9px',top: '19px'},100);
        }
      });
      //change width and position
      $("#nav-top").animate({width: '65%',left: '-9px',top: '19px'},100);
      //same thing but for bot bar
      $({rot: 0}).animate({rot: 45},{
        duration: 100,
        step: function()
        {
          $("#nav-bot").css({"-webkit-transform":"rotate("+this.rot+"deg)",
        "transform:":"rotate("+this.rot+"deg)"});
        }
      });
      //change width and position
      $("#nav-bot").animate({width: '65%',left: '-9px',top: '45px'},100);
    },function()
    {
      //rotate top 45deg
      $({rot: -45}).animate({rot: 1},{
        duration: 100,
        step: function()
        {
          $("#nav-top").css({"-webkit-transform":"rotate("+this.rot+"deg)",
        "transform:":"rotate("+this.rot+"deg)"});
        }
      });
      //change width and position
      $("#nav-top").animate({width: '100%',left: '0px',top: '10px'},100);
      //same thing but for bot bar
      $({rot: 45}).animate({rot: -1},{
        duration: 100,
        step: function()
        {
          $("#nav-bot").css({"-webkit-transform":"rotate("+this.rot+"deg)",
        "transform:":"rotate("+this.rot+"deg)"});
        }
      });
      //change width and position
      $("#nav-bot").animate({width: '100%',left: '0px',top: '54px'},100);
    }
  );

  $(".menu-nav-container").click(function(){
    $(".menu-sidebar-container").animate({right: '0px'},300);
  });

  $(".menu-sidebar-exit").click(function(){
    $(".menu-sidebar-container").animate({right: '-25%'},300);
  });
});
