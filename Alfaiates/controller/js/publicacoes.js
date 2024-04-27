
    document.addEventListener('DOMContentLoaded', function() {
        var tituloInput = document.getElementById('titulo');
        var descricaoInput = document.getElementById('descricao');
        var imagemInput = document.getElementById('fileimg');
        var tituloPublicacao = document.getElementById('titulo-publicacao');
        var descricaoPublicacao = document.getElementById('descricao-publicacao');
        var imagemPublicacao = document.getElementById('imagem-publicacao');

        tituloInput.addEventListener('input', function() {
            tituloPublicacao.innerText = tituloInput.value;
        });

        descricaoInput.addEventListener('input', function() {
            descricaoPublicacao.innerText = descricaoInput.value;
        });

        imagemInput.addEventListener('change', function() {
            var file = imagemInput.files[0];
            var reader = new FileReader();

            reader.onload = function(e) {
                imagemPublicacao.src = e.target.result;
            };

            reader.readAsDataURL(file);
        });
    });

//    function tema(cor)  {
//     // Seleciona todos os elementos da página
//     var elementos = document.querySelectorAll("*");

//     // Itera sobre os elementos
//     elementos.forEach(function(elemento) {
//         // Verifica se o elemento tem classes
//         elemento.style.Color = cor;
//         if (elemento.className) {
//             // Adiciona a propriedade de borda vermelha
//             elemento.style.borderColor = cor;
//             elemento.style.Color = cor;
           
//         }
//     });
// }

// Chama a função para mudar a cor da borda para vermelho


    
  


// Chama a função para mudar a cor da borda para vermelho






