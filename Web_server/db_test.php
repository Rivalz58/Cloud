<?php
$servername = "database";  // Nom du service dans docker-compose.yml
$username = "user";        // Doit correspondre à MYSQL_USER
$password = "password";    // Doit correspondre à MYSQL_PASSWORD
$dbname = "mydb";          // Nom de la base de données

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to the database.<br>";

// Vérifier si la table `test_table` existe
$tableCheckSql = "SHOW TABLES LIKE 'test_table'";
$result = $conn->query($tableCheckSql);

if ($result && $result->num_rows == 0) {
    echo "The table 'test_table' does not exist in the database '$dbname'.<br>";
    
    // Afficher toutes les tables existantes dans la base de données `mydb`
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
    
    // Terminer le script si la table `test_table` n'existe pas
    die("Please make sure the table 'test_table' is created in the database before running this script.<br>");
}

// Insertion d'une donnée dans la table `test_table`
$sql = "INSERT INTO test_table (name) VALUES ('TestUser')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully in 'test_table'.<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error . "<br>";
}

// Sélection et affichage des données de la table `test_table`
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

// Fermeture de la connexion
$conn->close();
?>
