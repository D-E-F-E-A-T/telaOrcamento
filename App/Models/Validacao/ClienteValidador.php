<?php 

namespace App\Models\Validacao;


use \App\Models\Validacao\ResultadoValidacao;
use \App\Models\Entidades\Cliente;


class ClienteValidador{

    public function validarCliente(Cliente $cliente){

        $resultadoValidacao = new ResultadoValidacao();

        if(empty($cliente->getNome())){
            $resultadoValidacao->addErro('nome', "Nome: Este campo não pode ser vazio !");
        }

        if(empty($cliente->getSobreNome())){
            $resultadoValidacao->addErro('sobreNome', "SobreNome: Este campo não pode ser vazio !");
        }

        if(empty($cliente->getCpf())){
            $resultadoValidacao->addErro('cpf', "Cpf: Este camp não pode ser vazio");
        }
        
    }
}



?>