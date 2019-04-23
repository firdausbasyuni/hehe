$(document).ready(function(){

        $('.dropdown').each(function() {
          var $dropdown = $(this);

          $(".dropdown-link", $dropdown).click(function(e) {
            e.preventDefault();
            $div = $(".submenu", $dropdown);
            $div.toggle();
            $(".submenu").not($div).hide();
            return false;
          });

        });

        $('html').click(function(){
          $(".submenu").hide();
        });

      });
$(document).click(function(event) {
  //if you click on anything except the modal itself or the "open modal" link, close the modal
  if (!$(event.target).closest(".modal,.js-open-modal").length) {
    $("body").find(".modal").removeClass("visible");
  }
});