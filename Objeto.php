<?php
    include_once 'Pessoa.php';
    include_once 'Conta.php';

    $eduardo = new Pessoa;
    $eduardo -> Codigo = 10;
    $eduardo -> Nome = "Eduardo Soares";
    $eduardo -> Altura = 1.72;
    $eduardo -> Idade = 23;
    $eduardo -> Nascimento = '10.01.2000';
    $eduardo -> Escolatidade = 'Ensino Superior';

    echo "Manipuolando o objeto $eduardo -> Nome: \n";
    echo "{$eduardo -> Nome} é formado em: {$eduardo -> Escolaridade}\n";
    
    $eduardo -> Formar('Tecnico em Eletricidade');
    echo "{$eduardo -> Nome} é formado em: {$eduardo -> Escolaridade}\n";
    echo "{$eduardo -> Nome} possui {$eduardo -> Idade} anos \n";

    $eduardo -> Envelhecer(1);
    echo "{$eduardo -> Nome} possui {$eduardo -> Idade} anos \n"; 

    $conta_eduardo = new Conta;
    $conta_eduardo ->Agencia = 6677;
    $conta_eduardo ->Codigo = "CC.12 34. 56";
    $conta_eduardo ->DatadeCriacao = "10/07/02";
    $conta_eduardo ->Titular = $eduardo;
    $conta_eduardo ->Senha = 9876;
    $conta_eduardo ->Saldo = 567.89;
    $conta_eduardo ->Cancelada = false;

    echo "<br>";
    echo "O saldo atual é de R\$ {$conta_eduardo->obterSaldo()} <br>";
    echo "Manipulando a conta de: {$conta_eduardo ->Titular->Nome} <br>";

    $conta_eduardo->Depositar(20);
    echo "O saldo atual é de R\${$conta_eduardo->obterSaldo()} <br>";

    $conta_eduardo->Retirar(10);
    echo "O saldo atual é de R\${$conta_eduardo->obterSaldo()} <br>";
?>