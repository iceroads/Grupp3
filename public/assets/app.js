var options = {

  url: "http://"+ajaxBase+"/film/userToJson",

  getValue: "name",

  list: {	
    match: {
      enabled: true
    }
  }
};

$(".starInput").easyAutocomplete(options);

$(".addStarInput").click(function(e) {
	e.preventDefault();
	var input = '<input type="text" name="star[]" value="" class="starInput">';
	$(input).insertAfter( $(".starInput").last() );
	$(".starInput").easyAutocomplete(options);
});