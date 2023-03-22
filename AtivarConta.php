<?php
    include_once 'Conta.php';

    $conta_eduardo = new Conta;
    $conta_eduardo -> Agencia = 1234;
    $conta_eduardo -> Codigo = "CC.1234.9";
    $conta_eduardo -> DataDeCriacao = '10.07.02';
    $conta_eduardo -> Titular = $eduardo;
    $conta_eduardo -> Senha = 2401;
    $conta_eduardo -> Saldo = 567.69;
    $conta_eduardo -> Cancelado = false;

    echo "\n";
    echo "Manipulando a conta de: {$conta_carlos->Titular->Nome} \n";
    echo "O saldo atual é R$ {$conta_carlos->ObterSaldo()} \n";

    $conta_carlos->Depositar(20);
    echo "O saldo atual é R$ {$conta_carlos->Obter_saldo()} \n";

    $conta_carlos->Retirar(10);
    echo "O saldo atual R$ {$conta_carlos->ObterSaldo()} \n";
?>