function showCard() {
  var nombre = document.getElementById('nombre').value;
  var mensaje = document.getElementById('mensaje').value;

  document.getElementById('res-name').textContent = nombre;
  document.getElementById('res-msg').textContent = mensaje;

  document.getElementById('formContainer').style.display = 'none';
  document.getElementById('cardContainer').style.display = 'block';
}
