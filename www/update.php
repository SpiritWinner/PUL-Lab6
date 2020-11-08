<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Update BD</title>
</head>
<body>
<div class="container" align="center>
    <div class="container">

        <?php
        include "DB.php";
        $id = filter($_GET['id']);
        $date = get_date($id);
        foreach ($date as $row){
        ?>
        <form action="update.php?id=<?php echo $id ?>" method="post">
            <h3>Update information</h3>

            <div class="form-group ">
                <label for="name">Name</label>
                <input class="form-control" name="name" id="name" type="text" placeholder="Enter name" value="<?php echo $row['name']; ?>">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" id="email" name="email" type="text" placeholder="Enter email address"
                       value="<?php echo $row['email']; ?>">
            </div>

            <?php
            }
            ?>

            <div class="form-actions">
                <button type="submit" name='update' class="btn btn-success btn-rounded">Update</button>
                <a class="btn btn-outline-info btn-rounded" href="index.php">Back</a>
            </div>

        </form>
    </div>
</div>
</body>
</html>
<?php
if (isset($_POST['update']))
{
    $name  = filter($_POST['name']);
    $email = filter($_POST['email']);
    update($name, $email, $id);
    header("Location: index.php");
}
?>