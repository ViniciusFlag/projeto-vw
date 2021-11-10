<?php

$this->get('/', 'PagesController@login');

$this->get('/localizaRacks', 'PagesController@localizaRacks');

$this->get('/cadastroRacks', 'PagesController@cadastroRacks');
$this->get('/editarRacks', 'PagesController@editarRacks');
$this->get('/exibirRacks', 'PagesController@exibirRacks');

$this->get('/relatorio', 'PagesController@relatorio');




