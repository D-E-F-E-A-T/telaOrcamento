<?php

namespace App\Models\DAO;

use App\Models\Entidades\Cliente;
use League\Flysystem\Exception;

class ClienteDAO extends BaseDAO{

    public function listaCliente($id = null){
        
        if($id){
            $resultodo = $this-select(
                "SELECT * FROM cadCliente WHERE codCliente = $id"
            );

            return $resultodo->fetchObject(Cliente::class);
        }else{
            $resultodo = $this->select(
                'SELECT * FROM cadCliente'
            );
            return $resultodo->fetchAll(\PDO::FETCH_CLASS, Cliente::class);
        }

        return false;

    }

    public function salvarCleinte(Cliente $cliente){

        try{

            $nome       = $cliente->getNome();
            $sobreNome  = $cliente->getSobeNome();
            $cpf        = $cliente->getCpf();

            return $this->insert(
                'cadCliente',
                ":nome, :sobreNome, :cpf",
                [
                    ':nome'=>$nome,
                    ':sobreNome'=>$sobreNome,
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
            $nome             = $cliente->getNome();
            $sobreNome        = $cliente->getSobreNome();
            $cpf              = $cliente->getCpf();

            return $this->update(
                'cadCliente',
                "nome = :nome, sobreNome = :sobreNome, cpf = :cpf",
                [
                    ':codCliente'=>$id,
                    ':nome'      =>$nome,
                    ':sobreNome' =>$sobreNome,
                    ':cpf'       =>$cpf

                ],
                "id = :codCliente"
            );
        }catch (\Exception $e){
            throw new \Exception("Erro na gravação do dados", 500);
        }
    }

    public function excluirCliente(Cliente $cliente){

        try{
            $id = $cliente->getCodCliente();

            return $this->delete('cliente', "codCliente = $id");
        }catch (Exception $e){
            throw new \Exception("Erro ao Deletar cliente", 500);
        }
    }
}
