<?php
$db = new SQLite3('/usr/bin/sqlite3/bellagids.db');

// Check for connection errors
if (!$db) {
    die("Connection failed: " . $db->lastErrorMsg());
}

// Database operations...
$result = $db->query('SELECT * FROM users');

while ($row = $result->fetchArray()) {
    // Process each row of data
}

// Close the database connection
$db->close();
?>
