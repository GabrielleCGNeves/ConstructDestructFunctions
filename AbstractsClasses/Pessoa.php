<?php
    class Pessoa {
        var $codigo;
        var $nome;
        var $altura;
        var $idade;
        var $nascimento;
        var $escolaridade;
        var $salario;

        function crescer($centimetros){
            if ($centimetros > 0){
                $this ->altura += $centimetros;
            }
        }
        
        function formar($titulacao){
            $this->escolaridade = $titulacao;
        }

        function envelhecer($anos){
            if ($anos > 0){
                $this->idade += $anos;
            }
        }   

        function __construct($codigo, $nome, $altura, $idade, $nascimento, $escolaridade, $salario){
            $this -> codigo = $codigo;
            $this -> nome = $nome;
            $this -> altura = $altura;
            $this -> idade = $idade;
            $this -> nascimento = $nascimento;
            $this -> escolaridade = $escolaridade;
            $this -> salario = $salario;
        }

        function __destruct(){
            echo "<br> Objeto {$this -> nome} Finalizado ... <br>";
        }
    }
?>