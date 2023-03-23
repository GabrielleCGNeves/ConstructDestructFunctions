<?php
    include_once 'AbstractsClasses/Pessoa.php';
    include_once 'AbstractsClasses/Conta.php';

    $eduardo = new Pessoa($codigo, $nome, $altura, $idade, $nascimento, $escolaridade, $salario);
    $eduardo -> codigo = 10;
    $eduardo -> nome = "Eduardo Soares";
    $eduardo -> altura = 1.72;
    $eduardo -> idade = 23;
    $eduardo -> nascimento = '10.01.2000';
    $eduardo -> escolaridade = 'Ensino Superior';

    echo "Manipuolando o objeto $eduardo -> nome: \n";
    echo "{$eduardo -> nome} é formado em: {$eduardo -> escolaridade}\n";
    
    $eduardo -> Formar('Tecnico em Eletricidade');
    echo "{$eduardo -> nome} é formado em: {$eduardo -> escolaridade}\n";
    echo "{$eduardo -> nome} possui {$eduardo -> idade} anos \n";

    $eduardo -> Envelhecer(1);
    echo "{$eduardo -> nome} possui {$eduardo -> idade} anos \n"; 

    $conta_eduardo = new Conta($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo);
    $conta_eduardo -> agencia = 6677;
    $conta_eduardo -> codigo = "CC.12 34. 56";
    $conta_eduardo -> datadeCriacao = "10/07/02";
    $conta_eduardo -> titular = $eduardo;
    $conta_eduardo -> senha = 9876;
    $conta_eduardo -> saldo = 567.89;
    $conta_eduardo -> cancelada = false;

    echo "<br>";
    echo "O saldo atual é de R\$ {$conta_eduardo -> obterSaldo()} <br>";
    echo "Manipulando a conta de: {$conta_eduardo -> titular->nome} <br>";

    $conta_eduardo -> Depositar(20);
    echo "O saldo atual é de R\${$conta_eduardo -> obterSaldo()} <br>";

    $conta_eduardo -> Retirar(10);
    echo "O saldo atual é de R\${$conta_eduardo -> obterSaldo()} <br>";
?>