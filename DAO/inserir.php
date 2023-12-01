<?php
    namespace POO\Farmacia\DAO;

    require_once('Conexao.php');

    use POO\Farmacia\DAO\Conexao;

    class Inserir{
        public function Insert(
            Conexao $conexao, 
            string $nomeTabela,
            int $rg, 
            string $nomeCompleto,
            string $temPlanoSaude,
            string $planoSaude,
            string $usaFarmaciaPopular,
            string $produtos)
            {
                try{
                    $conn = $conexao->Conectar();
                    $sql ="Insert into $nomeTabela(rg,telefone,nomeCompleto,temPlanoSaude,planoSaude,usaFarmaciaPopular,produtos) 
                    values('$rg','$nomeCompleto','$telefone','$temPlanoSaude','$planoSaude','$usaFarmaciaPopular','$produtos')";
                    $result = mysqli_query($conn, $sql);

                    if($result){
                        return "<br><br>Inserido com sucesso!";
                    }else{
                        return "<br><br>Não Inserido!";
                    }
                    mysqli_close($conn);//Fechando a conexão com o Banco de Dados
                }catch(Expect $erro){
                    echo $erro;
                }
            }

    }
?>