var Controller = {
  init:function() {
    this.carousel('.player')
  },
  carousel:function(element){
    $(element).nivoSlider({
      directionNav: false,
      directionNavHide:false
    });
  }
}

$(function(){
  Controller.init();
});