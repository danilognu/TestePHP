
<?php
//2. Manipulação de Arrays
$dados = array(
    array("id" => 1, "nome" => "João", "idade"  => 35),
    array("id" => 2, "nome" => "Maria", "idade" => 28),
    array("id" => 3, "nome" => "Pedro", "idade" => 42),
    array("id" => 4, "nome" => "Amanda", "idade" => 28),
    array("id" => 5, "nome" => "Danilo", "idade"  => 35),
);

echo "\n Entrada \n";
foreach ($dados as $col => $valor) {
    echo " Id: "    . $valor["id"] .
         " Nome: "  . $valor["nome"] .
         " Idade: " . $valor["idade"] . "\n";
}

$dadosRetorno = ordenaArray($dados,'nome');

echo "\n Saida \n";
foreach ($dadosRetorno as $col => $valor) {
    echo " Id: "    . $valor["id"] .
         " Nome: "  . $valor["nome"] .
         " Idade: " . $valor["idade"] . "\n";
}

function ordenaArray($array, $colOrdem)
{
    $colArray = array();
    foreach ($array as $i => $row) { 
        $colArray[$colOrdem]['_'.$i] = $array[$i][$colOrdem];
    }
    array_multisort($colArray['nome'],4);
    $retorno = array();
    foreach ($colArray as $col => $valor) {
        foreach ($valor as $i => $v) {
            $i = substr($i,1);
            if (!isset($retorno[$i])) $retorno[$i] = $array[$i];
            $retorno[$i][$col] = $array[$i][$col];
        }
    }
    return $retorno;
}
?>