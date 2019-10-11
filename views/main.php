<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
  integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <title>Project</title>
</head>
<body>
  <?php session_start(); ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
            <div class="panel-heading">Users
              <form method="get" action="http://new-project.com/new">
                <button type="submit" class="btn btn-success pull-right">New</button>
              </form>
            </div>
            <table class="table">
              <thead>
                <tr>
                  <th>First name</th>
                  <th>Second name</th>
                  <th>e-mail</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($_SESSION['users'] as $user): ?>
                  <tr>
                    <th>
                      <?php echo $user['first_name']; ?>
                    </th>
                    <th>
                      <?php echo $user['second_name']; ?>
                    </th>
                    <th>
                      <?php echo $user['second_name']; ?>
                    </th>
                    <th>
                      <form method="post" action="http://new-project.com/edit">
                        <input type="hidden" name="id" value=<?php echo $user['id']; ?>
                        <button type="submit" class="btn btn-success">Edit</button>
                      </form>
                      <form method="post" action="http://new-project.com/destroy">
                        <input type="hidden" name="id" value=<?php echo $user['id']; ?>
                        <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                    </th>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php session_destroy(); ?>
</body>
</html>
