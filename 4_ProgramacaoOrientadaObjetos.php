<?php

class Funcionario {

    public int $id;
    public string $nome;
    public float $salario;

    public function __construct($id ,$nome, $salario) {
        $this->id = $id;
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function getFuncionario() {
        echo "Id: " . $this->id . "\n";
        echo "Nome: " . $this->nome . "\n";
        echo "Salário Mensal R$ " . number_format($this->salario, 2, ',', '.') . "\n";
    }


    public function calcularSalarioAnual() {
        $salarioAnual = $this->salario * 12;
        return number_format($salarioAnual, 2, ',', '.');
    }
}


$funcionario1 = new Funcionario(1 ,"Marcos", 2000);

echo "Funcionário:\n";
$funcionario1->getFuncionario();

echo "Salário Anual: R$ " . $funcionario1->calcularSalarioAnual() . "\n";

?>

