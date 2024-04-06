
const a=document.getElementById('log');
//abrir caixa de login
function abrir(){
    a.show();

}
//fechar caixa de login ao clicar fora da caixa



function validar(){
       
    let email=document.forms['login']['text_email'].value;
    let nome=document.forms['login']['text_nome'].value;
    let senha=document.forms['login']['text_senha'].value;
     if(email =='' || nome =='' || senha ==''){
         alert('certifique-se que todos os campos estejam devidamente preenchidos');
        return false;
    }
    }