<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<div class="container ">
        <div class="row col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading text-center btn btn-success">
                    <h2>Update Data</h2>

                </div>
                    <form method="POST">
                        
                        <div class="mb-2">
                            <input type="text" value="<?php echo $row["id"]?>" class="form-control" id="id" name="id" placeholder="enter id"/>

                        </div>
                        <div class="mb-2">
                            <input type="text" value="<?php echo $row["name"]?>" class="form-control" id="name" name="name" placeholder="enter name"/>

                        </div>
                        
                        <div class="mb-2">
                            <input type="text" value="<?php echo $row["dept"]?>" class="form-control" id="dept" name="dept" placeholder="enter dept"/>

                        </div>
                        <div class="mb-2">
                            <input type="text" value="<?php echo $row["level"]?>" class="form-control" id="level" name="level" placeholder="enter level"/>

                        </div>
                        <div class="mb-2">
                            <input type="text" value="<?php echo $row["term"]?>" class="form-control" id="term" name="term" placeholder="enter term"/>

                        </div>
                        <div class="mb-2">
                            <input type="text" value="<?php echo $row["gpa"]?>" class="form-control" id="gpa" name="gpa" placeholder="enter gpa"/>

                        </div>
                        <?php } ?>
                        <button class="btn btn-success" type="submit">Update</button>
                    </form>
                    

                </div>
               

            </div>
        </div>
    </div>
</body>
</html>