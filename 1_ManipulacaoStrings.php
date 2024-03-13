
<?php
//1 - Manipulação de Strings

echo inverterFrase("Desenvolvedor Sênior em PHP");

function inverterFrase($frase){
    $retorno = (string) "";
    if(!empty($frase)){
        $fraseArray = explode(' ',$frase);
        foreach ( array_reverse($fraseArray) as $palavra) {
            $retorno .= $palavra . " ";
        }
    }  
    return $retorno;
}

?>