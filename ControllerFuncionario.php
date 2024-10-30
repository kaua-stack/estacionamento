<?php
    namespace Projeto\estacionamento\PHP;

    require_once("Pessoa.php");
    require_once("Funcionario.php");
    Use Projeto\estacionamento\PHP\ControllerFuncionario;
    Use Projeto\estacionamento\PHP\Funcionario;
    Use Projeto\estacionamento\PHP\Pessoa;

?>

<Doctype HTML>
    <HTML lang="PT-BR">
 
        <head>
            <meta charset="UTF-8">
        </head>
 
        <body>
            <form method="POST">
                <label>Nome do Funcionário: </label>
                <input type="text" id="nome" name="nome"/><br><br>
 
                <label>Código:</label>
                <input type="number" id="codigo" name="codigo"/><br><br>
 
                <label>CPF:</label>
                <input type="number" id="cpf" name="cpf"/><br><br>
 
                <label>Telefone:</label>
                <input type="tel" id="telefone" name="telefone"/><br><br>
 
                <label>Endereço:</label>
                <input type="text" id="endereco" name="endereco"/><br><br>
 
                <label>Informe a Data de nascimento:</label>
                <input type="date" id="dtNascimento" name="dtNascimento"/><br><br>

                <label>Informe o salário:</label>
                <input type="number" id="salario" name="salario"><br><br>

                <label>Informe o Cargo:</label>
                <input type="text" id="cargo" name="cargo"/><br><br>
                
                <button>Cadastrar
                <?php
                    try{
                        $nome =  $_POST['nome'];
                        $codigo =  $_POST['codigo'];
                        $cpf =  $_POST['cpf'];
                        $telefone =  $_POST['telefone'];
                        $endereco =  $_POST['endereco'];
                        $dtNascimento =  $_POST['dtNascimento'];
                        $salario =  $_POST['salario'];
                        $cargo =  $_POST['cargo'];
            
                        $funcionario1 = new Funcionario($nome, $codigo, $cpf, $telefone, $endereco, $dtNascimento, $salario, $cargo);
                    }catch(Exception $erro){
                    echo $erro;
                    }//fim do try_catch
                ?>
                </button><br><br>

                <?php
                    echo $funcionario1->imprimir();
                ?>

            </form>
        </body>
</HTML>
