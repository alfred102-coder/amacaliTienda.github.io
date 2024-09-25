$(document).ready(function(){
    $('.product-link').click(function(event) {
      event.preventDefault(); // Evita que se abra el enlace por defecto
      var description = $(this).data('description'); // Obtén la descripción del atributo data-description
      $(this).siblings('.product-description').html('<p>' + description + '</p>').toggle(); // Muestra/oculta la descripción
    });
  });
  