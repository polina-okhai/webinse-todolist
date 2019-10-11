<?php
class UsersController
{
  public function index()
  {
    $_SESSION['users'] = (new User)->all();
    echo file_get_contents('views/main.php');
  }
  public function show()
  {
    echo 'show';
  }
  public function new()
  {
    echo file_get_contents('views/new.php');
  }
  public function create()
  {
    (new User)->create('test_first_name', 'test_second_name', 'test_email');
  }
  public function edit()
  {
    (new User)->findById(1);
    echo file_get_contents('views/edit.php');
  }
  public function update()
  {
    (new User)->update('test_first_name', 'test_second_name', 'test_email', 1);
  }
  public function destroy()
  {
    (new User)->delete(1);
  }
}
?>
