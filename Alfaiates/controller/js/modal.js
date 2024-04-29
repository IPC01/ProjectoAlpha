var openModalBtn = document.getElementById('openModalBtn');
var modal = document.getElementById('myModal');
var closeBtn = document.getElementsByClassName('close')[0];
var cadastroForm = document.getElementById('cadastroForm');

openModalBtn.addEventListener('click', function() {
  modal.style.display = 'block';
});

closeBtn.addEventListener('click', function() {
  modal.style.display = 'none';
});

window.addEventListener('click', function(event) {
  if (event.target == modal) {
    modal.style.display = 'none';
  }
});

// cadastroForm.addEventListener('submit', function(event) {
//   event.preventDefault(); // Evita o envio padrão do formulário
//   // Aqui você pode adicionar o código para lidar com o envio do formulário, como enviar os dados para um servidor ou salvar localmente
//   alert('Cliente cadastrado com sucesso!');
//   modal.style.display = 'none';
// });
