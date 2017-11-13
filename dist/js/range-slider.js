// console.log('range slider');
jQuery(document).ready(function($){
  $('.gf-range-slider').slider({
    range: "min",
    value: 1,
    step: 1000,
    min: 100000,
    max: 2000000,
    slide: function(event, ui) {
        $("#" + $(this).data('sister')).val(ui.value);
    }
  });
  $(".range-slider input").change(function () {
      var value = this.value.substring(1);
      $("#" + this.id + '_slider').slider("value", parseInt(this.value));
  });
});
