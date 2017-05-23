var options = {

  url: "http://127.0.0.1/skola/grupparbete/movie/public/film/userToJson",

  getValue: "name",

  list: {	
    match: {
      enabled: true
    }
  },

  theme: "square"
};

$(".starInput").easyAutocomplete(options);

$(".addStarInput").click(function(e) {
	e.preventDefault();
	var input = '<input type="text" name="star[]" value="" class="starInput">';
	$(input).insertAfter( $(".starInput").last() );
	$(".starInput").easyAutocomplete(options);
});