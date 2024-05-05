<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>To Do App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/task">ToDoApp</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/task">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Task</a>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link success" href="task/create">Add Task</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container mt-5">
<table idate="task_table" class="table table-hover table-striped table-bordered text-center">
  <caption>List of users</caption>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($tasks as $task) : ?>
    <tr>
      <th scope="row"><?= $task['id'] ?></th>
      <td><?= $task['title'] ?></td>
      <td><?= $task['description'] ?></td>
      <td> <?= $task['status'] == 0 ? 'Pending' : 'Completed'; ?>
</td>
      <td>
        <a href="/task/edit/<?= $task['id'] ;?>" class="btn btn-success">Edit</a>
        <a href="/task/delete/<?= $task['id'] ;?>" class="btn btn-danger" onclick="return confirm('Are You sour want to delete  this task')">Delete</a>
    </td>
    </tr>
   <?php endforeach; ?>
  </tbody>
</table>
</div>
<script>
     <script>
        $(document).ready(function () {
            $('#task_table').DataTable();
        });
    </script>
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>