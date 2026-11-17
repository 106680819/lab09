<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lab 09 - Used Cars</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<main>
    <h1>Used Car Dealership</h1>
<?php
    // Step 1: Connect to the database
    require_once "settings.php";
    $dbconn = @mysqli_connect($host, $user, $pwd, $sql_db);
    if ($dbconn) {
        // Step 2: Create your SQL query
        $query = "SELECT * FROM cars";
        // Step 3: Execute your SQL query
        $result = mysqli_query($dbconn, $query);
        // Step 4: Did it work?
        if ($result && mysqli_num_rows($result) > 0) {
            echo "<table>";
            echo "<tr><th>Car ID</th><th>Make</th><th>Model</th><th>Price</th><th>Year</th></tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['car_id'] . "</td>";
                echo "<td>" . $row['make'] . "</td>";
                echo "<td>" . $row['model'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
                echo "<td>" . $row['yom'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>There are no cars to display.</p>";
        }
        // Step 5: Close connection
        mysqli_close($dbconn);
    } else {
        echo "<p>Unable to connect to the db.</p>";
    }
?>
</main>
</body>
</html>
