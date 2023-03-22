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
?>