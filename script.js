
// prevent the default behavior of the form
document.getElementById("form").addEventListener("submit", function (event) {
  event.preventDefault();
  function showCard(nombre, mensaje) {
    var card = document.getElementById("card");
    var resMsg = document.getElementById("res-msg");
    var resName = document.getElementById("res-name");

    console.log(nombre, mensaje);

    resName.innerHTML = nombre;
    resMsg.innerHTML = mensaje;

    card.style.display = "block";
  }
});