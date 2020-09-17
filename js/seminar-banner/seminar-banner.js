$(function(){
  // Make sure it scrolls to top , so user would notice the banner
  setTimeout(function(){
      $("html").scrollTop(0)
  }, 1000);


  $(".img-close-banner").on('click', function(){
      $(".free-seminar-section").first().hide();
  })

  $("#countdown").countdown('2020/09/30 00:00:00')
    .on('update.countdown', function(event){
        var days = event.strftime("%D").split('');
        var hours = event.strftime("%H").split('');
        var minutes = event.strftime("%S").split('');

        $(".digit-d-1").text(days[0]);
        $(".digit-d-2").text(days[1]);
        $(".digit-h-1").text(hours[0]);
        $(".digit-h-2").text(hours[1]);
        $(".digit-m-1").text(minutes[0]);
        $(".digit-m-2").text(minutes[1]);

    })
    .on('finish.countdown', function(){
      $(".digit-d-1").text("0");
      $(".digit-d-2").text("0");
      $(".digit-h-1").text("0");
      $(".digit-h-2").text("0");
      $(".digit-m-1").text("0");
      $(".digit-m-2").text("0");
    })
})