<?php
include('connect.php');

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $dept = $_POST['dept'];
    $level = $_POST['level'];
    $term = $_POST['term'];
    $gpa = $_POST['gpa'];

    $sql = mysqli_query($con, "UPDATE studentresult SET name='$name', dept='$dept', level='$level', term='$term', gpa='$gpa' WHERE id='$id'");
    if ($sql) {
        echo "<script>alert('Data updated successfully');</script>";
        echo "<script type='text/javascript'>document.location = '#######';</script>";
    } else {
        echo "<script>alert('Error');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading text-center btn btn-success">
                    <h2>Update Data</h2>
                </div>
                <form method="post">
    <?php
    include('connect.php');
    
    // Ensure 'id' is passed correctly from the previous page
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $query = mysqli_query($con, "SELECT * FROM studentresult WHERE id = '$id' LIMIT 1");
        
        if ($row = mysqli_fetch_array($query)) {
    ?>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="mb-2">
                <label for="name">Name</label>
                <input type="text" value="<?php echo $row["name"]; ?>" class="form-control" id="name" name="name" placeholder="Enter name"/>
            </div>
            <div class="mb-2">
                <label for="dept">Dept</label>
                <input type="text" value="<?php echo $row["dept"]; ?>" class="form-control" id="dept" name="dept" placeholder="Enter dept"/>
            </div>
            <div class="mb-2">
                <label for="level">Level</label>
                <input type="text" value="<?php echo $row["level"]; ?>" class="form-control" id="level" name="level" placeholder="Enter level"/>
            </div>
            <div class="mb-2">
                <label for="term">Term</label>
                <input type="text" value="<?php echo $row["term"]; ?>" class="form-control" id="term" name="term" placeholder="Enter term"/>
            </div>
            <div class="mb-2">
                <label for="gpa">GPA</label>
                <input type="text" value="<?php echo $row["gpa"]; ?>" class="form-control" id="gpa" name="gpa" placeholder="Enter GPA"/>
            </div>
        <?php } else { ?>
            <p>No record found for the given ID.</p>
        <?php }
    }
     else { ?>
        <p>ID is not set.</p>
    <?php } ?>
    <button class="btn btn-success" type="submit" name="update">Update</button>
</form>

            </div>
        </div>
    </div>
</body>
</html>
