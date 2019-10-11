<?php
class User
{
  const HOST = 'localhost';
  const DATABASE = 'webinse';
  const USER = 'root';
  const PASSWORD = '351695';

  function __construct(){
    $this->link = mysqli_connect(self::HOST, self::USER, self::PASSWORD, self::DATABASE) or
    die('Connection error: ' . mysql_error());
  }

  public function all()
  {
    $query = "SELECT * FROM users";
    $result = mysqli_query($this->link, $query);
    while($row = $result->fetch_assoc()){
      $users[] = [
        'first_name' => $row['first_name'],
        'second_name' => $row['second_name'],
        'email' => $row['email']
      ];
    }
    return $users;
  }

  public function findById($id)
  {
    $query = "SELECT * FROM users WHERE id={$id}";
    $result = mysqli_query($this->link, $query);
    $row = $result->fetch_assoc();
    $user = [
      'first_name' => $row['first_name'],
      'second_name' => $row['second_name'],
      'email' => $row['email']
    ];
    return $user;
  }

  public function create($first_name, $second_name, $email)
  {
    $query = "INSERT INTO users(first_name, second_name, email) VALUES({$first_name}, {$second_name}, {$email})";
    mysqli_query($this->link, $query);
  }

  public function update($id, $first_name, $second_name, $email)
  {
    $query = "UPDATE users SET first_name = '{$first_name}', second_name = '{$second_name}', email = '{$email}' WHERE id={$id}";
    mysqli_query($this->link, $query);
  }

  public function delete($id)
  {
    $query = "DELETE FROM users WHERE id={$id}";
    mysqli_query($this->link, $query);
  }
}

?>
