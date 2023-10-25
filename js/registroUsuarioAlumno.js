
const formulario = document.getElementById("formulario");
const inputs = document.querySelectorAll('#formulario input')
const expresiones = {
  emailRegex: /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/,
  objetivoRegex: /^[a-zA-ZÀ-ÿ\s]{19,200}$/
}

const validarFormulario = (e) => {
  switch (e.target.name) {
    case "objetivo":
      if (expresiones.objetivoRegex.test(e.target.value)) {
        e.target.classList.remove('is-invalid');
        e.target.classList.add('is-valid');
      } else {
        e.target.classList.remove('is-valid');
        e.target.classList.add('is-invalid');
        e.preventDefault();
      }
      break;
      case "email":
      if (expresiones.emailRegex.test(e.target.value)) {
        e.target.classList.remove('is-invalid');
        e.target.classList.add('is-valid');
      } else {
        e.target.classList.remove('is-valid');
        e.target.classList.add('is-invalid');
        e.preventDefault();
      }
      break;


    default:
      break;
  }
};

inputs.forEach((input) => {
  input.addEventListener('keyup', validarFormulario);
  input.addEventListener('blur', validarFormulario);
});

formulario.addEventListener('submit', (e) => {
// Verificar si al menos uno de los campos está vacío
  const hasEmptyFields = Array.from(inputs).some(input => input.value.trim() === '');

  // Verificar si al menos uno de los campos tiene la clase 'is-invalid'
  const hasInvalidFields = Array.from(inputs).some(input => input.classList.contains('is-invalid'));

  // Prevenir el envío del formulario si hay campos vacíos o con errores
  if (hasEmptyFields || hasInvalidFields) {
    e.preventDefault();
  }
});

