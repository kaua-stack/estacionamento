<?php
    namespace Projeto\estacionamento\PHP;
    
    require_once("Pessoa.php");
    Use Projeto\estacionamento\PHP\Gerente;
    Use Projeto\estacionamento\PHP\Pessoa;

    Class Gerente extends Pessoa{
        protected int $codigo;
        protected string $dtNascimento;
        protected float $salario;
        protected string $cargo;

        public function __construct(
            string $nome,
            int $codigo,
            string $cpf,
            string $telefone,
            string $endereco,
            string $dtNascimento,
            float $salario,
            string $cargo
        ){
            parent::__construct($nome,$cpf,$telefone,$endereco);
            $this->codigo = $codigo;
            $this->dtNascimento = $dtNascimento;
            $this->salario = $salario;
            $this->cargo  = $cargo;
        }//fim do construtor

        public function __get(string $name):mixed
        {
            return $this->name;
        }//fim dos gets

        public function __set(string $name, mixed $value):void
        {
            $this->$name = $value;
        }//fim do set

        public function imprimir():string
        {
            
            return parent::imprimir().
                   "<br><br>Código: ".$this->codigo.
                   "<br>Data de Nascimento: ".$this->dtNascimento.
                   "<br>Salário: ".$this->salario.
                   "<br>Cargo: ".$this->cargo;
        }//fim do método

    }//fim da classe


?>