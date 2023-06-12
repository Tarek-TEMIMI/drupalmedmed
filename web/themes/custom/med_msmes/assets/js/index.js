(function(window, document, $, Drupal){
  Drupal.behaviors.someKey = {
    attach: function() {
      $(".language-title").on('click', function () {
        $(".list-traduction-wrapper").toggleClass("show");
        event.preventDefault();
     });
    }
  };

  if( $('.resource-nav-tabs-wrapper .resource-list-wrapper input[type=radio]').is(':checked') ){
      $('.resource-nav-tabs-wrapper .resource-list-wrapper input[type=radio]:checked').parent().addClass("checked-item");
      $('.resource-nav-tabs-wrapper .resource-list-wrapper input[type=radio]:not(:checked)').parent().removeClass("checked-item");
  }
})(window, document, jQuery, Drupal);
