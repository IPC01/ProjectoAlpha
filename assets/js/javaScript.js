window.onload=function(){
    document.getElementById("elemento1").innerText='novo texto';
    console.log("ola");}

    function calcular(){
        //ir buscar os valores inseridos
        var valor1=document.getElementById('valor1').value;
        var valor2=document.getElementById('valor2').value;

        //adicionar os valores para um resultado
        var resultado=parseInt(valor1)+parseInt(valor2);

        //apresentar o resultado na pagina
        document.getElementById('resultado').innerText=resultado;
    }

    function tabuada(){
        /*
        ir buscar o valor
        criar um texto vazio que sera actualizado com a tabuada
        adicionar sequencialmente o resultado de cad calculo
        apesentar na pagina
        */

        var valor=parseInt(document.getElementById('valor').value);
        var texto='';

        for(var i=1;i<=10;i++){
            texto=texto+valor.toString() + 
            'x' + i.toString() +
             '=' + (i*valor).toString() + '<br>';
        }

        document.getElementById('resultado2').innerHTML= texto;
    }