<?php
    namespace POO\Farmacia\DAO;

    class conexao{
        public function Conectar() {
            try{
                $conn = mysqli_connect('localhost','root','','Farmacia');
                if($conn){
                    echo "Conectado com sucesso!";
                    return $conn;
                }
            }catch(Expect $erro){
                echo $erro;
            }    
        }
    }//fim da clase

?>