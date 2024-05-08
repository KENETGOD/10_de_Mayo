function showCard() {
  var nombre = document.getElementById('nombre').value;
  var mensaje = document.getElementById('mensaje').value;

  // Actualizar el contenido de la tarjeta
  document.getElementById('res-name').textContent = nombre;
  document.getElementById('res-msg').textContent = mensaje;

  // Ocultar el formulario y mostrar la tarjeta
  document.getElementById('formContainer').style.display = 'none';
  document.getElementById('cardContainer').style.display = 'block';

  // Reproducir la canción seleccionada
  var song = document.getElementById('cancion').value;
  var audio = new Audio(song);
  audio.play();
}
