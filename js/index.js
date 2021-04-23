$(document).ready(function(){
  $(window).scroll(function(){
    if (this.scrollY > 20){
      $(".mainMenu").addClass("sticky");
      $(".goTop").fadeIn();
    } 
        else {
          $(".mainMenu").removeClass("sticky");
          $(".goTop").fadeOut();

        }
  });

  $(".goTop").click(function(){scroll(0,0);});
});