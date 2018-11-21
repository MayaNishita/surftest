jQuery(function($){
  $(function() {
  $('.box1').on('inview', function(event, isInView) {
    if (isInView) {
    //表示領域に入った時
      $(this).addClass('fadeInDown');
    }
  });
  $('.box2').on('inview', function(event, isInView) {
    if (isInView) {
      $(this).addClass('bounceIn');
    }
  });
  $('.box3').on('inview', function(event, isInView) {
    if (isInView) {
      $(this).addClass('lightSpeedIn');
    }
  });
});
});
