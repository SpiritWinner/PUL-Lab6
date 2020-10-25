<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My database test</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <form action="add.php" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Name user</label>
            <input placeholder="Enter name" type="text" name="name" class="form-control" id="exampleInputEmail1" >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Email address</label>
            <input placeholder="Enter email" type="text" name="email" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" name="sendTask" class="btn btn-primary btn-block mt-4 ">Send</button>
    </form>
</div>
<div class="contentTable">
    <table class="table table-bordered table-dark">
        <tr align="center">
            <th scope="col">User name</th>
            <th scope="col">Email</th>
            <th scope="col">Actions</th>
        </tr>
        <?php
        require 'config.php';
        global $pdo;

        $query = $pdo->query('SELECT * FROM `mybdtest`');
        while ($row = $query->fetch(PDO::FETCH_OBJ)) {
            echo '<tr align="center">';
            echo '<td>' . $row->name . '</td>';
            echo '<td>' . $row->email . '</td>';
            echo '<td>';
            echo '<a class="btn btn-outline-info" href="view.php?id=' . $row->id . '">View</a>';
            echo ' ';
            echo '<a class="btn btn-outline-success" href="update.php?id=' . $row->id . '">Update</a>';
            echo ' ';
            echo '<a class="btn btn-outline-danger" href="delete.php?id=' . $row->id . '">Delete</a>';
            echo '</td>';
            echo '</tr>';
        }
        ?>
    </table>
</div>
</body>
</html>
