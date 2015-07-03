$(document).ready(function() {
    Shadowbox.init({
        continuous: true,
        animate: false,
    });
    skrollr.init({
        render: function(data) {
        //Debugging - Log the current scroll position.
        //console.log(data.curTop);
    }
});


  var sections = $('section');
  var navigation_links = $('#menu a');
 
  sections.waypoint({
    handler: function(event, direction) {
      var active_section;
      active_section = $(this);
      if (direction === "up") active_section = active_section.prev();

      var active_link = $('#menu a[href="#' + active_section.attr("id") + '"]');
      navigation_links.removeClass("selected");
      active_link.addClass("selected");
    },
    offset: '35%'
  });
  
        
      
      navigation_links.click( function(event) {

    $.scrollTo(
      $(this).attr("href"),
      {
        duration: 200,
        offset: { 'left':0, 'top':-0.15*$(window).height() }
      }
    );

  });