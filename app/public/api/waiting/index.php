<?php

// Step 1: Get a datase connection from our help class
$db = DbConnection::getConnection();

// Step 2: Create & run the query
if (isset($_GET['guid'])) {}
  $stmt = $db->prepare(
    'SELECT * FROM Patient
    WHERE guid = ?'
  );
  $stmt->execute();
} else {
  $stmt = $db->execute('SELECT * FROM Patient');
  $stmt->execute();
}
  $patients = $stmt->fetchAll();


// Step 3: Convert to JSON
$json = json_encode($patients, JSON_PRETTY_PRINT);

// Step 4: Output
header('Content-Type: application/json');
echo $json;
