<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body style="margin: 50px;">
    <h1>Display Result</h1>
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
                
                

            </tr>
        </thead>

        <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "test";

            $connection = new mysqli($servername,$username,$password,$database);

            if($connection->connect_error) {
                die("Connectoin faield: " . $connection->connect_error);
            }

            $sql = "SELECT * FROM studentresult";
            $result = $connection->query($sql);

            if(!$result) {
                die("Invalid query: . $connection_error");
            }

            while($row = $result->fetch_assoc()) {
                echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["name"] . "</td>
                <td>" . $row["dept"] . "</td>
                <td>" . $row["level"] . "</td>
                <td>" . $row["term"] . "</td>
                <td>" . $row["gpa"] . "</td>
                
                </tr>";

            }



        

            ?>
                
            

        </tbody>
       
    </table>   
</body>
</html>
