<?php
    include_once 'AbstractsClasses/Pessoa.php';
    include_once 'AbstractsClasses/Conta.php';

    $eduardo = new Pessoa(10, "Eduardo Soares", 1.72, 23, '10.01.2000', 'Ensino Superior', 5000);

    echo "Manipulando o objeto {$eduardo -> nome} <br>";
    echo "{$eduardo -> nome} é formado em: {$eduardo -> escolaridade}<br>";
    
    $eduardo -> Formar('Tecnico em Eletricidade');
    echo "{$eduardo -> nome} é formado em: {$eduardo -> escolaridade}<br>";
    echo "{$eduardo -> nome} possui {$eduardo -> idade} anos <br>";

    $eduardo -> Envelhecer(1);
    echo "{$eduardo -> nome} possui {$eduardo -> idade} anos <br>"; 

    $conta_eduardo = new Conta(6677, "CC.12 34. 56", $eduardo, "10.05.2021", 9876, 567.89);
    $conta_eduardo -> agencia = 6677;
    $conta_eduardo -> codigo = "CC.12 34. 56";
    $conta_eduardo -> titular = $eduardo;
    $conta_eduardo -> dataDeCriacao = "10.05.2021";
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