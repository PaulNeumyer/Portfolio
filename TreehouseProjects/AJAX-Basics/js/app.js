$(document).ready(function() {

$('form').submit(function(e){
  e.preventDefault();
  var searchTerm = $('#search').val();
  var submitButton = $('#submit');
 
  submitButton.prop("disabled", true).val("searching....");

    // the AJAX part
    var flickerAPI = "http://api.flickr.com/services/feeds/photos_public.gne?jsoncallback=?";
    var flickrOptions = {
          tags: searchTerm,
          format: "json"
        };
  
    function displayPhotos(data) {
      var photoHTML = '<ul>';
      $.each(data.items,function(i,photo) {
        photoHTML += '<li class="grid-25 tablet-grid-50">';
        photoHTML += '<a href="' + photo.link + '" class="image">';
        photoHTML += '<img src="' + photo.media.m + '"></a></li>';
      }); // end each
      photoHTML += '</ul>';
      $('#photos').html(photoHTML);
    }
    submitButton.prop("disabled", false).val("search");
    $.getJSON(flickerAPI, flickrOptions, displayPhotos);
  }); // end submit
 
}); // end ready