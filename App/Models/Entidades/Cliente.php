<?php 

    namespace App\Models\Entidades;

    use DateTime;

    class Cliente{

        private $codCliente;
        private $nome;
        private $sobeNome;
        private $cpf;
        private $dataCastroCliente;


        /**
         * Get the value of nome
         */ 
        public function getNome()
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         *
         * @return  self
         */ 
        public function setNome($nome)
        {
                $this->nome = $nome;

                return $this;
        }

        /**
         * Get the value of sobeNome
         */ 
        public function getSobeNome()
        {
                return $this->sobeNome;
        }

        /**
         * Set the value of sobeNome
         *
         * @return  self
         */ 
        public function setSobeNome($sobeNome)
        {
                $this->sobeNome = $sobeNome;

                return $this;
        }

        /**
         * Get the value of cpf
         */ 
        public function getCpf()
        {
                return $this->cpf;
        }

        /**
         * Set the value of cpf
         *
         * @return  self
         */ 
        public function setCpf($cpf)
        {
                $this->cpf = $cpf;

                return $this;
        }

        /**
         * Get the value of dataCastroCliente
         */ 
        public function getDataCastroCliente()
        {
                return new DateTime($this->dataCastroCliente);
        }

        /**
         * Set the value of dataCastroCliente
         *
         * @return  self
         */ 
        public function setDataCastroCliente($dataCastroCliente)
        {
                $this->dataCastroCliente = $dataCastroCliente;

                return $this;
        }

        /**
         * Get the value of codCliente
         */ 
        public function getCodCliente()
        {
                return $this->codCliente;
        }

        /**
         * Set the value of codCliente
         *
         * @return  self
         */ 
        public function setCodCliente($codCliente)
        {
                $this->codCliente = $codCliente;

                return $this;
        }
    }

?>