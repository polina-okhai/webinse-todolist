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
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-8 col-md-offset-2">
          <div class="panel-heading"><h2>New user</h2></div>
          <form method="post" action="http://new-project.com/create">
            <div class="form-group">
              <label>First name</label>
              <input type="text" name="first_name" class="form-control" placeholder="First name">
            </div>
            <div class="form-group">
              <label>Second name</label>
              <input type="text" name="second_name" class="form-control" placeholder="Second name">
            </div>
            <div class="form-group">
              <label>e-mail</label>
              <input type="text" name="email" class="form-control" placeholder="e-mail">
            </div>
            <button type="submit" class="btn btn-success pull-right">Create</button>
          </form>
          <form method="get" action="http://new-project.com">
            <button type="submit" class="btn btn-default">Back</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
