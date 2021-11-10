<?php
namespace app\controller;

use app\core\Controller;
require_once('../app/core/Controller.php');

class PagesController extends Controller
{
  public function __construct()
  {
  
  }

  public function login() 
  {
    $this->load('login/main');
  }

  public function localizaRacks() 
  {
    $this->load('localizaRacks/main');
  }

  
  public function cadastroRacks() 
  {
    $this->load('cadastroRacks/main');
  }

  public function editarRacks() 
  {
    $this->load('cadastroRacks/editar');
  }
  
  public function exibirRacks() 
  {
    $this->load('exibirRacks/exibir');
  }

  public function relatorio() 
  {
    $this->load('relatorio/main');
  }
}

?>