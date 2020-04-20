<?php

class homeController extends controller {

    public function __construct()
    {
        $u = new usuarios();
        if(!$u->isLogged()){
            header("Location: login");
        }
    }
    public function index(){
        $dados = array(
            'nome' =>''
        );
        $p = new posts();
        if(isset($_POST['msg']) && !empty($_POST['msg'])){
            $msg = addslashes($_POST['msg']);
            $p->inserirPosts($msg);
        }
        $u = new usuarios($_SESSION['twlg']);
        $dados['nome'] = $u->getNome();
        $dados['qt_seguindo'] = $u->getCountSeguidos();
        $dados['qt_seguidores'] = $u->getCountSeguidores();
        $dados['sugestao'] = $u->getUsuarios(5);

        $lista =$u->getSeguidos();
        $lista[] = $_SESSION['twlg'];
        $dados['feed'] = $p->getFeed($lista, 10);
        $this->loadTemplate('home', $dados);
    }   

    public function seguir($id){
        if(!empty($id)) {
            $id = addslashes($id);
            $sql = "SELECT * FROM usuarios WHERE id = '$id'";
            $sql = $this->db->query($sql);
            if($sql->rowCount()>0){
                $r = new relacionamentos();
                $r->seguir($_SESSION['twlg'], $id);
            }
        }
        header("Location: /home");
    }
}