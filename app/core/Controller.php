<?php
namespace app\core;
//Controller responsavel para requisitar as paginas

//todas as controller ira extender esta


class Controller 
{
  protected function load(string $view, $params = [])
  {
    $twig = new \Twig\Environment(
      new \Twig\Loader\FilesystemLoader('../app/view')
    );

    $twig->addGlobal('BASE', BASE);
    echo $twig->render($view . '.twig.php', $params);
  }
}
?>