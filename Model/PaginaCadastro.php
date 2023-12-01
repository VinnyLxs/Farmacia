<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Cadastro</title>
    <link rel="stylesheet" href="Style.css">
</head>

<body>
    <header>
        <form method="POST" action="../main.php">
            <label for="nomeCompleto",>Nome Completo:</label>
            <input type="text" name="nomeCompleto" required> <br><br>

            <label for="rg">RG:</label>
            <input type="text" name="rg" required><br><br>

            <label for="telefone">Telefone:</label>
            <input type="tel" name="telefone" required><br><br>

            <label for="temPlanoSaude">Tem Plano de Saúde?</label>
            <select name="temPlanoSaude">
                <option value="Não">Não</option>
                <option value="Sim">Notredame</option>
                <option value="Não">Sulamerica</option>
                <option value="Não">Unimed</option>
                <option value="Não">Amil Saúde</option>
                <option value="Não">São Cristóvão Saúde</option>
            </select><br><br>

            <label for="usaFarmaciaPopular">Usa Farmácia Popular?</label>
            <select name="usaFarmaciaPopular">
                <option value="Sim">Sim</option>
                <option value="Não">Não</option>
            </select><br><br>

            <label for="produtos">Quais Produtos Consome?</label>
            <input type="text" name="produtos"><br><br>

            <form method="POST">
            <label> Qual é a Farmacia que esta se cadastrando? </label>
            <select name="opcao">
                <option value="0"></option>
                <option value="1">Farmacia A</option>
                <option value="2">Farmacia B</option>
                <option value="3">Farmacia C</option>
                <option value="4">Farmacia D</option>
            </select> <br><br>
            
        <button> Cadastrar
                <?php
                    //Método Consultar Objeto
                    session_start();
                        //Passe o dado para o construtor
                        $_SESSION['cpf']      = $_POST['tCPF'];
                        $_SESSION['nome']     = $_POST['tNome'];
                        $_SESSION['telefone'] = $_POST['tTel'];
                        $_SESSION['endereco'] = $_POST['tEnd'];
                        $_SESSION['cidade']   = $_POST['tCid'];
                    //Fim do Método Consultar Objeto
                    return "Cadastro Realizado";
                ?>
        </button>
        </form>
    </header>  
</body>
</html>