//Duplicate modal-backdrop
$(".modal").on("shown.bs.modal", function () {
    if ($(".modal-backdrop").length > 1) {
        $(".modal-backdrop").not(':first').remove();
    }
})
$(document).ready(function() {
    // change dropdown button text when a dropdown option is clicked
    $('.dropdown-item').click(function() {
      $('.dropdown-toggle').text($(this).text());
    });
  
    // show html tooltip
    $('[data-toggle="tooltip"]').tooltip({
      html: true,
      placement: "right"
    });
  });

/*$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})*/