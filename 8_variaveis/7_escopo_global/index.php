 <?php
#Escopo global - As variaveis NÃO ficam acessíveis dentro de uma função, apenas com a palavra global
  $teste = 'asb';

  echo "$teste global 1 <br/>";
  if(5>2){
    $teste = "aff";
    echo "$teste if <br/>";
  }
  echo "$teste global 2 <br/>";

 function testandoGlobal(){
    global $teste;
    $teste = 2;
    echo "$teste global funcao<br/>";
 }

 testandoGlobal();

 echo "$teste global 1 <br/>";