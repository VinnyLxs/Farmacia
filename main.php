<?php
     namespace POO\ProjetoBDPHP;

    require_once('Model/Pessoa.php');
    require_once('DAO/Conexao.php');
    require_once('DAO/Inserir.php');

    use POO\Farmacia\modelo\Cadastro;
    use POO\Farmacia\DAO\Conexao;
    use POO\Farmacia\DAO\Inserir;

    $conexao = new Conexao();
   

    $inserir = new Inserir();
    echo $inserir->Insert($conexao, "pessoa",$pessoa->getNomeCompleto(),$pessoa->getRg()
    ,$pessoa->getTelefone(),$pessoa->getTemPlanoSaude(),$pessoa->getPlanoSaude(),$pessoa->getUsaFarmaciaPopular(),$pessoa->getProdutos());


    ?>