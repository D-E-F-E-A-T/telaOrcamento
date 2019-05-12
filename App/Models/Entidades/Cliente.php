<?php 

    namespace App\Models\Entidades;

    use DateTime;

    class Cliente{

        private $codCliente;
        private $nomeCliente;
        private $sobreNomeCliente;
        private $cpf;
        private $dataCastroCliente;



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

        /**
         * Get the value of nomeCliente
         */ 
        public function getNomeCliente()
        {
                return $this->nomeCliente;
        }

        /**
         * Set the value of nomeCliente
         *
         * @return  self
         */ 
        public function setNomeCliente($nomeCliente)
        {
                $this->nomeCliente = $nomeCliente;

                return $this;
        }

        /**
         * Get the value of sobreNomeCliente
         */ 
        public function getSobreNomeCliente()
        {
                return $this->sobreNomeCliente;
        }

        /**
         * Set the value of sobreNomeCliente
         *
         * @return  self
         */ 
        public function setSobreNomeCliente($sobreNomeCliente)
        {
                $this->sobreNomeCliente = $sobreNomeCliente;

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
}