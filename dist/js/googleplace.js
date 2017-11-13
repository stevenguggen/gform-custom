// JavaScript Document
var placeSearch, autocomplete, autocomplete2, autocomplete3;
   var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'long_name',
	    administrative_area_level_2: 'short_name',
        postal_code: 'short_name'
      };


      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('input_1_23')),
           {
  types: ['(regions)'],
  componentRestrictions: {country: 'au'}
});
			
		console.log(document.getElementById('input_1_23'));


			
     /*  
      autocomplete.addListener('place_changed', fillInAddress);
		       autocomplete2.addListener('place_changed', fillInPlace);*/

      }
      function fillInAddress() {
       var place = autocomplete.getPlace();
	   

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
		  

          if (componentForm[addressType]) {


            var val = place.address_components[i][componentForm[addressType]];
			
            document.getElementById(addressType).value = val;
			  
          }
        }
		
/*		
document.getElementById("autocomplete").value = place.name;

  document.getElementById('latt').value = place.geometry.location.lat();
  document.getElementById('longg').value = place.geometry.location.lng();*/
      }
	  
	  function fillInPlace() {
	  
	  var place2 = autocomplete2.getPlace();
	      document.getElementById('placeid').value = place2.place_id;

              document.getElementById('autocomplete').value = place2.formatted_address;				
		      document.getElementById('latt').value = place2.geometry.location.lat();
			  document.getElementById('longg').value = place2.geometry.location.lng();
			 
			 
					
          
      }
	  
	  








	  
      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
			
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
		
          });
		  
        }
      }
	  
	  function geolocate2() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
			
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete2.setBounds(circle.getBounds());
		
          });
		  
        }
      }
	  




 