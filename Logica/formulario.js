$(".selectpicker").selectpicker();

function verificarEmail(correo) {
  const patronCorreo = /[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]+/g;
  //.exec busca coincidencias del patron dentro del correo
  const patronesEncontrados = patronCorreo.exec(correo);
  // si no encuentra coincidencias devuelve false
  if (patronesEncontrados === null) {
    return false;
  } else {
    return true;
  }
}

$("#formulario").submit(function (event) {
  let correoIng = $("#email").val();
  if (verificarEmail(correoIng) == false) {
    alert("Correo incorrecto: " + correoIng);
    event.preventDefault();
  }

  let calleIng = $("#direccion").val();
  if (verificarCalle(calleIng) == false) {
    alert("Direccion invalida.");
    // evita el evento de enviar formulario
    event.preventDefault();
  }
  return;
});

function verificarCalle(direccion) {
  const patronCalle = /^[a-zA-Z0-9\s]*$/;
  console.log(direccion);
  const patronesEncontrados = patronCalle.exec(direccion);
  console.log(patronesEncontrados);
  if (patronesEncontrados === null) {
    return false;
  } else {
    return true;
  }
}
