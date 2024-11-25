<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Result</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body style="margin: 50px;">
    <h1>Display Result</h1>
    <div class="card">
        <div class="card-body">
            <a href="result.html"><button type="button" class="btn btn-primary">Add Data</button></a>
        </div>
    </div>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Dept</th>
                <th>Level</th>
                <th>Term</th>
                <th>GPA</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "test";

            $connection = new mysqli($servername, $username, $password, $database);

            if ($connection->connect_error) {
                die("Connection failed: " . $connection->connect_error);
            }

            $sql = "SELECT * FROM studentresult";
            $result = $connection->query($sql);

            if (!$result) {
                die("Invalid query: " . $connection->error);
            }

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["name"] . "</td>
                    <td>" . $row["dept"] . "</td>
                    <td>" . $row["level"] . "</td>
                    <td>" . $row["term"] . "</td>
                    <td>" . $row["gpa"] . "</td>
                    <td>
                        <form action='update.php' method='post' style='display:inline;'>
                            <input type='hidden' name='id' value='" . $row["id"] . "'>
                            <input type='submit' name='update' class='btn btn-warning' value='Update'>
                        </form>
                        <form action='delete.php' method='post' style='display:inline;'>
                            <input type='hidden' name='id' value='" . $row["id"] . "'>
                            <input type='submit' name='delete' class='btn btn-danger' value='Delete'>
                        </form>
                    </td>
                </tr>";
            }

            $connection->close();
            ?>
        </tbody>
    </table>
</body>
</html>
