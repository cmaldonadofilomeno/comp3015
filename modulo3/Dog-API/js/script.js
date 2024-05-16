$(document).ready(function () {
    $("#getDog").click(function () {
      $.ajax({
        url: "https://dog.ceo/api/breeds/image/random",
        method: "GET",
        success: function (response) {
          console.log(response);
          var imgLocation = response.message;
          var img = "<img src='" + imgLocation + "' class='img-thumbnail' alt='Imagen de Perro'>";
          $("#dogContainer").html(img);
        },
        error: function () {
          $("#dogContainer").text("Error al cargar la imagen del perro.");
        },
      });
    });
});
