$('.projectbox').click(
    function(){
      $(this).next().slideDown('slow');
    }
);

$('button').click(
    function(){
      $('.projet').slideUp('slow');
    }
);
