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