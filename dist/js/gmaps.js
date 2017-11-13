jQuery(document).ready(function($){
  $(document).on("focus", "#input_1_23", function(){
    initAutocomplete();
  });
  $(document).on("keydown", "#input_1_23", function(){
    $(".pac-container").attr("display", "block");
  });
  var html = "<input type = 'hidden' id = 'locality'><input type = 'hidden' id = 'administrative_area_level_1'><input type = 'hidden' id = 'administrative_area_level_1'><input type = 'hidden' id = 'postal_code'><input type = 'hidden' id = 'street_number'><input type = 'hidden' id = 'route'>";
  $("body").append(html);
});
