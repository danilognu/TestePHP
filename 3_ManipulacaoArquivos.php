<?php

function filtrarMensagensPorData($caminhoArquivo, $dataInicio, $dataFim){

    if(!empty($caminhoArquivo)){

        try {
            echo $dataInicio . "\n";
            echo $dataFim . "\n";
            $lines = file($caminhoArquivo);
            foreach($lines as $line)
            { 
                $data = getData($line);
                $mensagem = getMensagem($line);
                if(strtotime($data) >= strtotime($dataInicio) && strtotime($data) <= strtotime($dataFim)){
                    echo " \n ->: ";
                    echo " LOG DATA: ". $data . " Mensagem: " . $mensagem;;
                }
            }
        } catch (Exception $e) {
            echo 'Problema na Exceção: ',  $e->getMessage(), "\n";
        }
    }

}
function getData($valor){
    $txt = explode('mensagem:', $valor);
    $data = str_replace("data:","",$txt[0]);
    return trim($data);
}

function getMensagem($valor){
    if(!empty($valor)){
        $ret = explode('mensagem:', $valor);
        return trim($ret[1]);
    }else{
        return "";
    }
}

filtrarMensagensPorData("arquivo/log.txt","01/03/2024 00:00:00", "05/03/2024 23:59:59");

?>

