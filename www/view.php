<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Read BD</title>
</head>
<body>
<div class="container" align="center">
    <form align="center">

        <h3>View a Customer</h3>

        <?php
        require 'config.php';
        global $pdo;

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }
        $date = $pdo->query("select * from mybdtest where id ='$id'");
        foreach ($date

        as $row){
        ?>

        <div class="form-horizontal">

            <div class="control-group">
                <label class="col-form-label">Name: </label>
                <label>
                    <?php echo $row['name']; ?>
                </label>
            </div>

            <div class="control-group">
                <label class="col-form-label">Email: </label>
                <label>
                    <?php echo $row['email']; ?>
                </label>
            </div>

            <div class="form-actions">
                <a type="button" class="btn btn-primary btn-rounded" href="index.php">Back</a>
            </div>

            <?php
            }
            ?>
        </div>
    </form>
</div>
</body>
</html>