<?php
class HomeController extends Controller {

  #Informacao do usuario logado
  private $dadosAcesso;

  #CONTRUTOR DE SEGURANCAO
  public function __construct(){
    #MODELS
//    $secury = new securyAcess();
//
//    if($secury->validarAcessoUsuario() == false):
//      header("Location:".BASE_URL."Login");
//      exit();
//    endif;
//
//    $this->dadosAcesso= $secury->getDadosUserLog();
  }#Fechar construtor





  #============================================================================================================
  #============================================================================================================
  #===== [ INICO DOS COMANDOS  ] =========================================================
  #============================================================================================================
  #============================================================================================================
    public function index() {
        $dados = array();

      $this->loadTemplate('home', $dados);


    }#class que controla index



  #FUNCAO QUE UTILIZAR PARA SAIR DO SISTEMA
  public function SairSistema(){
    $dados = array();

    if(session_status() == 2):
      session_destroy();
      $_SESSION['userKeyPainel'] = $_SESSION['userKeyPainel']."2";
      unset($_SESSION['userKeyPainel']);

      $secury = new securyAcess();

      $secury->limpSessionKey($this->infoUser['id']);
      header("Location:".BASE_URL_SITE."Login");
      exit();

    else:
      echo "<script>alert('Erro ao sair do sistema');</script>";
      header("Location:".BASE_URL."Home");
    endif;

  }#Fechando class para sair do sistema


}#Class que controla o home
