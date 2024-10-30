<?php
    namespace projetoEstacionamento\estacionamento\php;

    use projetoEstacionamento\estacionamento\php\Entradaesaida;

        class Entradaesaida {
            private int $codigo;
            private string $dtentrada;
            private int $entrada;
            private int $saida;
            private int $total;
            private int $soma;
            private int $valor;
            
            public function __construct(
                string $dtentrada,
                int $entrada,
                int $saida,
                int $codigo,
                int $total,
                int $soma,
                int $valor
            ){
                $this->dtentrada = $dtentrada;
                $this->entrada = $entrada;
                $this->saida = $saida;
                $this->codigo = $codigo;
                $this->total = $total;
                $this->soma = $soma;
                $this->valor = $valor;
            
            }
                public function __get(string $nome):mixed{
                    return $this->name;
            }
                
                public function __set(string $nome,mixed $value):void 
              {
                    $this->nome =$value;

            }

        

            public function imprimir():string
            {
                return  
                        "<br> Cosigo" .$this->codigo.
                        "<br> Data de entrada: " .$this->dtentrada.
                        "<br>Hora de entrada:" .$this->entrada.
                        "<br>Hora de saida: " .$this->saida.
                        "<br> Total a pagar : " .$this->total;
                    
            }
        }



?>