<?php 

namespace App\Controllers;

use App\Lib\Sessao;
use App\Models\DAO\ClienteDAO;
use App\Models\Entidades\Cliente;
use App\Models\Validacao\ClienteValidador;


class ClienteController extends Controller{

    public function index(){

        $clienteDAO = new ClienteDAO();

        self::setViewParam('listaCliente',$clienteDAO->listaCliente());

        $this->render('/cliente/index');

        Sessao::limpaMensagem();
    }

    public function cadastroCliente(){

        $this->render('/cliente/cadastroCliente');

        Sessao::limpaFormulario();
        Sessao::limpaFormulario();
        Sessao::limpaErro();


    }

    public function salvarCliente(){

        $Cliente = new Cliente();
        $Cliente->setNome($_POST['nome']);
        $Cliente->setSobreNome($_POST['sobreNome']);
        $Cliente->setCpf($_POST['cpf']);

        Sessao::gravaFormulario($_POST);


        $clienteDAO = new ClienteDAO();
        $clienteDAO->salvarCliente($Cliente);

        Sessao::limpaFormulario();
        Sessao::limpaMensagem();
        Sessao::limpaErro();

        $this->redirect('/cliente');

    }

    public function edicaoCliente(){

        $id = $params[0];

        $clienteDAO = new ClienteDAO();

        $cliente = $clienteDAO->listaCliente($id);

        if($cliente){

            Sessao::gravaMensagem("Produto inexistente");
            $this-redirect('/cliente');

        }

        self::setViewParam('cliente', $cliente);

        $this-render('/cliente/editar');

        Sessao::limpaMensagem();
    }

    public function atualizarCliente(){

        $Cliente = new Cliente();
        $Cliente->setCodCliente($_POST['codCliente']);
        $Cliente->setNome($_POST['nome']);
        $Cliente->setSobreNome($_POST['sobreNome']);
        $Cliente->setCpf($_POST['cpf']);

        Sessao::gravaFormulario($_POST);

        $clienteValidacao = new ClienteVlidacao();
        $cliente->atualizar($Cliente);

        Sessao::limpaFormulario();
        Sessao::limpaMensagem();
        Sessao::limpaErro();

        $this->redirect('/cliente');
    }

    public function exclusaoCliente($params){

        $id = $params[0];

        $clienteDAO= new ClienteDAO();

        $cliente= $clienteDAO->listar($id);

        if(!$cliente){
            Sessao::gravaMensagem("Cliente inexistente");
            $this->redirect('/cliente');
        }

        self::setViewParam('cliente', $cliente);
        $this->render('/cliente/exclusao');

        Sessao::limpaMensagem();

    }

    public function excluirCliente(){

        $Cliente = new Cliente();
        $Cliente->setCodCliente($_POST['codCliente']);

        $clienteDAO = new ClienteDAO();

        if(!$clienteDAO->excluir($Cliente)){

            Sessao::gravaMensagem("cliente inexistente");
            $this->redirect('/cliente');
        }

        Sessao::gravaMensagem("Cliente excluído com sucesso !");
        $this->redirect('/cliente');
    }


}


?>