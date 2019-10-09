<?php

class Router
{
  public function call()
  {
    switch ($_SERVER['REQUEST_URI']) {
  case '/':
    echo 'index';
    break;
  case '/new':
    echo 'new';
    break;
  case '/create':
    echo 'create';
    break;
  case '/edit/id':
    echo 'edit';
    break;
  case '/update':
    echo 'update';
    break;
  case '/destroy':
    echo 'destroy';
    break;
  case '/id':
    echo 'show';
    break;

  default:
    echo 'Error 404';
    break;
  }
 }
}
?>
