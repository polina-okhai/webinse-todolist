<?php
class UsersController
{
  public function index()
  {
    $_SESSION['users'] = (new User)->all();

    echo file_get_contents('views/main.php');
  }

  public function new()
  {
    echo file_get_contents('views/new.php');
  }

  public function create()
  {
    $first_name = $_POST['first_name'];
    $second_name = $_POST['second_name'];
    $email = $_POST['email'];

    (new User)->create($first_name, $second_name, $email);

    header('Location: http://new-project.com');
  }

  public function edit()
  {
    $id = $_POST['id'];

    $_SESSION['user'] = (new User)->findById($id);

    echo file_get_contents('views/edit.php');
  }

  public function update()
  {
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $second_name = $_POST['second_name'];
    $email = $_POST['email'];

    (new User)->update($first_name, $second_name, $email, $id);

    header('Location: http://new-project.com');
  }

  public function destroy()
  {
    $id = $_POST['id'];

    (new User)->delete($id);

    header('Location: http://new-project.com');
  }
}
?>
