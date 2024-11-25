<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" content="width=device-width, initial-scale=1.0">
    <title>Student Results Input</title>
    <script>
        function addSubject() {
            const subjectsContainer = document.getElementById("subjects");
            const newSubject = document.createElement("div");
            newSubject.innerHTML = `
                <label for="subject[]">Subject:</label>
                <input type="text" name="subject[]" required>
                <label for="marks[]">Marks:</label>
                <input type="number" name="marks[]" required>
                <br>`;
            subjectsContainer.appendChild(newSubject);
        }
    </script>
</head>
<body>

<h1>Input Student Marks for Multiple Subjects</h1>
<form method="post" action="">
    <label for="student_name">Student Name:</label>
    <input type="text" id="student_name" name="student_name" required>
    <br>
    <div id="subjects">
        <div>
            <label for="subject[]">Subject:</label>
            <input type="text" name="subject[]" required>
            <label for="marks[]">Marks:</label>
            <input type="number" name="marks[]" required>
        </div>
    </div>
    <button type="button" onclick="addSubject()">Add Another Subject</button>
    <br><br>
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $servername = "localhost";
    $username = "your_username";
    $password = "your_password";
    $dbname = "your_database";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Loop through each subject and marks input
    $student_name = $_POST['student_name'];
    $subjects = $_POST['subject'];
    $marks = $_POST['marks'];

    // Prepare statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO results (student_name, subject, marks) VALUES (?, ?, ?)");

    // Insert each subject and marks into the database
    for ($i = 0; $i < count($subjects); $i++) {
        $stmt->bind_param("ssi", $student_name, $subjects[$i], $marks[$i]);
        $stmt->execute();
    }

    echo "<h2>Records added successfully!</h2>";

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>

</body>
</html>