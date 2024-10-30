<?php
    namespace Projeto\estacionamento\PHP;
    include_once 'functionCalcular.php';

    Use Projeto\estacionamento\PHP\controllerDiaria;
    Use Projeto\estacionamento\PHP\functionCalcular;
    use Projeto\estacionamento\PHP\entradaesaida

?>

<Doctype HTML>
    <HTML lang="PT-BR">
 
        <head>
            <meta charset="UTF-8">
        </head>
 
        <body>

            <?php
                 $total = "";//instanciando
            ?>

            <h1>Diaria !<h1>
            <form method="POST">

                <label>Data de ENTRADA:</label>
                <input type="date" id="dtentrada" name="dtentrada"/><br><br>

                <label>Hora de Entrada :</label>
                <input type="number" id="entrada" name=""/><br><br>

                
                <label>Hora de saida </label>
                <input type="number" id="horas" name="horas"/><br><br>

                <button>Calcular Total
                    <?php
                        $horas = $_POST['horas'];
                    ?>
                </button><br><br>
                
             
                    <?php
                        if($horas == ""){
                            echo "Preencha os Campos!!";
                        }else{
                            echo "TOTAL: ".calcularH($horas, $total);    
                        }
                    ?>
                

            </form>
        </body>
</HTML>
 