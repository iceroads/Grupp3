var options = {

  url: "http://"+ajaxBase+"/user/userToJson",

  getValue: "name",


  list: {	
    match: {
      enabled: true
    },
    onChooseEvent: function() {
      var input = $("#starInput");
      $("#starInput").data('selectID', input.getSelectedItemData().id);
    }
  }
};

$("#starInput").easyAutocomplete(options);

$(document).on("click", ".star-remove", function(e) {
  e.preventDefault();
  var inputClass = ".star-"+$(this).data('userid');
  $(this).parent("li").remove();
  $(inputClass).remove();
});

$(".addStar").click(function(e) {
  e.preventDefault();
  var starinput = $("#starInput");
  var starinputID = starinput.data("selectID");
  var starinputValue = starinput.val();
  var hiddeninput = '<input type="hidden" class="star-'+starinputID+'" name="star[]" value="'+starinputID+'">';
  var listItem = '<li>'+starinputValue+' - <a href="#" class="star-remove" data-userid="'+starinputID+'">&times;</a></li>';
  if($(".star-"+starinputID).length > 0) {
    $('<div class="alert alert-danger"> This Star is already in the list </div>').insertBefore($(this)).hide().slideToggle(300).delay(2500).slideToggle(300).queue(function () { $(this).remove(); });
    return;
  }
  $(hiddeninput).insertAfter($(this));
  $(".starList").append(listItem);
  starinput.val("");
});