$('#star').autocomplete({
    serviceUrl: '/3-Gits/Movie/public/film/userToJson',
    dataType: "json",
    onSelect: function (suggestion) {
        alert('You selected: ' + suggestion.value + ', ' + suggestion.data);
    }
});