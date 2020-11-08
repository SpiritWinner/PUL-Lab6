<?php
include "DB.php";
$id = filter($_GET['id']);
if (isset($_POST['delete'])) {
    delete($id);
    header('Location: ./index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Delete BD</title>
</head>
<body>
<div class="container">

    <form class="form-horizontal" action="delete.php?id=<?php echo $id ?>" method="post">
        <h3>Remove data from table</h3>
        <p class="alert alert-error">Are you sure to delete ?</p>
        <div class="form-actions">
            <button type="submit" name="delete" class="btn btn-danger btn-rounded">Yes</button>
            <a class="btn btn-info btn-rounded" href="index.php">No</a>
        </div>
    </form>
</div>
</body>
</html>
