<?php

class Router
{
  public function call()
  {
    switch ($_SERVER['REQUEST_URI']) {
  case '/':
    (new UsersController)->index();
    break;
  case '/id':
    (new UsersController)->show();
    break;
  case '/new':
    (new UsersController)->new();
    break;
  case '/create':
    (new UsersController)->create();
    break;
  case '/edit/id':
    (new UsersController)->edit();
    break;
  case '/update':
    (new UsersController)->update();
    break;
  case '/destroy':
    (new UsersController)->destroy();
    break;

  default:
    echo 'Error 404';
    break;
  }
 }
}
?>
