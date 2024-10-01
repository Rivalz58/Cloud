<?php
$servername = "database";  // Name of the service in docker-compose.yml
$username = "user";        // Must match MYSQL_USER
$password = "password";    // Must match MYSQL_PASSWORD
$dbname = "mydb";          // Name of the database

// Connect to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to the database.<br>";

// Check if the table `test_table` exists
$tableCheckSql = "SHOW TABLES LIKE 'test_table'";
$result = $conn->query($tableCheckSql);

if ($result && $result->num_rows == 0) {
    echo "The table 'test_table' does not exist in the database '$dbname'.<br>";
    
    // Display all existing tables in the `mydb` database
    echo "Current tables in the database:<br>";
    $sql = "SHOW TABLES";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "Table: " . array_values($row)[0] . "<br>";
        }
    } else {
        echo "No tables found in the database '$dbname'.<br>";
    }
    
    // Terminate the script if the `test_table` does not exist
    die("Please make sure the table 'test_table' is created in the database before running this script.<br>");
}

// Insert a record into the `test_table`
$sql = "INSERT INTO test_table (name) VALUES ('TestUser')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully in 'test_table'.<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error . "<br>";
}

// Select and display data from the `test_table`
$sql = "SELECT id, name FROM test_table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Data in 'test_table':<br>";
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " - Name: " . $row["name"] . "<br>";
    }
} else {
    echo "0 results in 'test_table'.<br>";
}

// Close the connection
$conn->close();
?>
