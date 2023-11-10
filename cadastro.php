<?php
    /* CLASSE de cadastro */

    class Cadastro{

        /* Declarando as variaveis */
        private int $cpf;
        private string $nome;
        private string $telefone;
        private string $endereco;
        private string $cidade;


        //inicio d construtor
        public function __construct($cpf, $nome, $telefone, $endereco, $cidade){
            $this->setCpf($cpf);
            $this->setNome($nome);
            $this->setTelefone($telefone);
            $this->setEndereco($endereco);
            $this->setCidade($cidade);
        }// Fim do construtor

        public function getCpf(){
            return $this->cpf;
        }//Fim do metódo
        public function getNome(){
            return $this->nome;
        }//Fim do metódo
        public function getTelefone(){
            return $this->telefone;
        }//Fim do metódo
        public function getEndereco(){
            return $this->endereco;
        }//Fim do metódo
        public function getCidade(){
            return $this->cidade;
        }//Fim do metódo


        public function setCpf($cpf){
            return $this->cpf = $cpf;
        }//Fim do metódo
        public function setNome($nome){
            return $this->nome = $nome;
        }//Fim do metódo
        public function setTelefone($telefone){
            return $this->telefone = $telefone;
        }//Fim do metódo
        public function setEndereco($endereco){
            return $this->endereco = $endereco;
        }//Fim do metódo
        public function setCidade($cidade){
            return $this->cidade = $cidade;
        }//Fim do metódo


        public function imprimir(){
            $msg =  "CPF: ".$this->getCpf().
                    "\nNome: ".$this->getNome(). 
                    "\nTelefone: ".$this->getTelefone(). 
                    "\nEndereco: ".$this->getEndereco(). 
                    "\nCidade: ".$this->getCidade();

            return $msg;
        }// fim do metódo

        public function excluir(){
            $this->setCpf(0);
            $this->setNome('');
            $this->setTelefone('');
            $this->setEndereco('');
            $this->setCidade('');

            return "Dados excluidos!";
        }//fim do metodo

        public function menu(){
            $men = "\nEscolha o que deseja atualizar: ".
                   "\n1. Nome".
                   "\n2. Telefone".
                   "\n3. Endereco".
                   "\n4. Cidade";
            return $men;
        }//fim do metodo

        public function atualizar($opcao, $dado){
            switch($opcao){
                case 1:
                    $this->setNome($dado);
                    break;

                case 2:
                    $this->setTelefone($dado);
                    break;
                
                case 3:
                    $this->setEndereco($dado);
                    break;

                case 4:
                    $this->setCidade($dado);
                    break;

                default:
                    return "Opção escolhida não é válida";
            }//fim da escolha
            
        }//fim do metodo
    }// Fim da classe

?>