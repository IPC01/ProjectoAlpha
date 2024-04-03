
const a=document.getElementById('log');
//abrir caixa de login
function abrir(){
    a.show();

}
//fechar caixa de login ao clicar fora da caixa

window.onclick = function(event) {
    var dialog = document.getElementById('log');
    var form=document.getElementsByName('login');
    var botaoabrir = document.getElementById('b-abrir');

    if (event.target !== dialog && event.target !== botaoabrir && event.target !== form) {
        dialog.close();
    }
}

function validar(){
       
    let email=document.forms['login']['text_email'].value;
    let nome=document.forms['login']['text_nome'].value;
    let senha=document.forms['login']['text_senha'].value;
     if(email =='' || nome =='' || senha ==''){
         alert('certifique-se que todos os campos estejam devidamente preenchidos');
        return false;
    }
    }