<?php
//Classe Cadastro

namespace POO\Farmacia\Modelo;

    class Cadastro{
        //Declaração de Variáveis
        private string $nomeCompleto;
        private int    $rg;
        private int    $telefone;
        private string $temPlanoSaude;
        private string $planoSaude;
        private string $usaFarmaciaPopular;
        private string $produtos;

        public function __construct($nomeCompleto, $rg, $telefone, $temPlanoSaude, $planoSaude ,$usaFarmaciaPopular, $produtos){
            $this->setNomeCompleto    ($nomeCompleto);
            $this->setRg              ($rg);
            $this->setTelefone        ($telefone);
            $this->setTemPlanoSaude   ($temPlanoSaude);
            $this->setPlanoSaude      ($planoSaude);
            $this->setFarmaciaPopular ($usaFarmaciaPopular);
            $this->setProdutos        ($produtos);
        }

        //Métodos modificadores e de consulta
        

        //Get
        public function getNomeCompleto(){
            return $this->nomeCompleto;
        }//Fim do Método

        public function getRg(){
            return $this->rg;
        }//Fim do Método

        public function getTelefone(){
            return $this->telefone;
        }//Fim do Método

        public function getTemPlanoSaude(){
            return $this->temPlanoSaude;
        }//Fim do Método

        public function getPlanoSaude(){
            return $this->planoSaude;
        }//Fim do Método
        public function getUsaFarmaciaPopular(){
            return $this->usaFarmaciaPopular;
        }//Fim do Método
        public function getProdutos(){
            return $this->produtos;
        }//Fim do Método

        
        //Set
        public function setNomeCompleto($nomeCompleto){
            $this->nomeCompleto = $nomeCompleto;
        }//Fim do Método

        public function setRg($rg){
            $this->rg = $rg;
        }//Fim do Método

        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }//Fim do Método

        public function setTemPlanoSaude($temPlanoSaude){
            $this->temPlanoSaude = $temPlanoSaude;
        }//Fim do Método

        public function setPlanoSaude($planoSaude){
            $this->planoSaude = $planoSaude;
        }//Fim do Método

        public function setFarmaciaPopular($usaFarmaciaPopular){
            $this->usaFarmaciaPopular = $usaFarmaciaPopular;
        }//Fim do Método

        public function setProdutos($produtos){
            $this->produtos = $produtos;
        }//Fim do Método

    }//Fim da Classe Cadastro
?>