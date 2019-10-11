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
          <div class="panel-heading"><h2>Edit</h2></div>
          <form method="post" action="http://new-project.com/update">
            <div class="form-group">
              <label>First name</label>
              <input type="text" name="first_name" class="form-control" value=<?php echo $_SESSION['user']['first_name']; ?>>
            </div>
            <div class="form-group">
              <label>Second name</label>
              <input type="text" name="second_name" class="form-control" value=<?php echo $_SESSION['user']['second_name']; ?>>
            </div>
            <div class="form-group">
              <label>e-mail</label>
              <input type="text" name="email" class="form-control" value=<?php echo $_SESSION['user']['second_name']; ?>>
            </div>
            <input type="hidden" name="id" value=<?php echo $_SESSION['user']['id']; ?>
            <button type="submit" class="btn btn-success">Edit</button>
          </form>
          <form method="get" action="http://new-project.com">
            <button type="submit" class="btn btn-default">Back</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php session_destroy(); ?>
</body>
</html>
