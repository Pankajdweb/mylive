$(function(){
    $(window).scroll(function(){
      var scroll = $(window).scrollTop();
     
      if (scroll >= 500) {
        $(".my-header").addClass("scrool-header");
    } else {
        $(".my-header").removeClass("scrool-header");
    }
    });
});


