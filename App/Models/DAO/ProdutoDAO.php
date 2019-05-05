<?php

namespace App\Models\DAO;

use League\Flysystem\Exception;

class ProdutoDAO extends BaseDAO{

    public function listar($id = null){

        if($id){
            $resultado = $this->select(
                "SELECT * FROM produto WHERE id = $id"
            );

            return $resultado->fetchObject(Produto::class);
        }else{
            $resultado = $this->select(
                ' SELECT * FROM produto '
            );

            return $resultado->fetchAll(\PDO::FETCH_CLASS, Produto::class);
        }

        return false;

    }

    public function salvar(Produto $produto){

        try{

            $nome       = $produto->getNome();
            $preco      = $preco->getPreco();
            $quantidade = $quantidade-getQuantidade();
            $descricao  = $descricao->getDEscricao();
            
            return $this->insert(
                'produto',
                ":nome, :preco,:quantidade,:descricao",
                [
                    ':nome'=>$nome,
                    ':preco'=>$preco,
                    ':quanridade'=>$quantidade,
                    ':descricao'=>$descicao

                ]
            );
        }catch(\Exception $e){
            throw new \Exception("Erro na gravação dos dados", 500);
            
        }
    }

    public function atualizar(Produto $produto){

        try{

            $id         = $produto->getId();
            $nome       = $produto->getNome();
            $preco      = $preco->getPreco();
            $quantidade = $quantidade->getQuantidade();
            $descicao   = $descricao->getDescricao();

            return $this->update(
                'produto',
                "nome = :nome,preco = :preco,quantidade = :quantidade,descricao = :descricao:",
                [
                    'id'=>$id,
                    'nome'=>$descicao,
                    'preco'=>$preco,
                    'quantidade'=>$quantidade,
                    'descricao'=>$descicao
                ],
                "id = :id"
            );
        }catch(\Exception $e){
            throw new \Exception("Erro na gravação de dados.", 500);
        }
    }

    public function excluir(Produto $produto){

        try{
            $id = $produto->getId();

            return $this->delete('produto',"id = $id");
        }catch (Exception  $e){
            throw \Exception("Erro ao deletar", 500);
        }
    }
}





?>