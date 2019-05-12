<?php

namespace App\Models\DAO;

use App\Models\Entidades\Cliente;
use League\Flysystem\Exception;

class ClienteDAO extends BaseDAO{

    public function listaCliente($codCliente = null){
        
        if($codCliente){
            $resultado = $this-select(
                "SELECT * FROM cadCliente WHERE codCliente = $codCliente"
            );

            return $resultado->fetchObject(Cliente::class);
        }else{
            $resultado = $this->select(
                'SELECT * FROM cadCliente'
            );
            return $resultado->fetchAll(\PDO::FETCH_CLASS, Cliente::class);
        }

        return false;

    }

    public function salvarCliente(Cliente $cliente){

        try{

            $nome       = $cliente->getNomeCliente();
            $sobreNome  = $cliente->getSobreNomeCliente();
            $cpf        = $cliente->getCpf();

            return $this->insert(
                'cadCliente',
                ":nomeCliente, :sobreNomeCliente, :cpf",
                [
                    ':nomeCliente'=>$nome,
                    ':sobreNomeCliente'=>$sobreNome,
                    ':cpf'=>$cpf
                ]
            );


       
        }catch (\Exception $e){
        throw new \Exception("Erro na gravação do dados", 500);
        }
    }

    public function atualizarCliente(Cliente $cliente){

        try{

            $id               = $cliente->getCodCliente();
            $nome             = $cliente->getNomeCliente();
            $sobreNome        = $cliente->getSobreNomeCliente();
            $cpf              = $cliente->getCpf();

            return $this->update(
                'cadCliente',
                "nome = :nomeCliente, sobreNome = :sobreNomeCliente, cpf = :cpf",
                [
                    ':codCliente'       =>$id,
                    ':nomeCliente'      =>$nome,
                    ':sobreNomeCliente' =>$sobreNome,
                    ':cpf'              =>$cpf

                ],
                "codCliente = :codCliente"
            );
        }catch (\Exception $e){
            throw new \Exception("Erro na gravação do dados", 500);
        }
    }

    public function excluirCliente(Cliente $cliente){

        try{
            $id = $cliente->getCodCliente();

            return $this->delete('cliente', "codCliente = $codCliente");
        }catch (Exception $e){
            throw new \Exception("Erro ao Deletar cliente", 500);
        }
    }
}
