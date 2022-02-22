<?php

function db() {
$conn = new mysqli('localhost', 'root', '');

if ($conn->connect_error)
die(sprintf('Unable to connect to the database. %s', $conn->connect_error));

// Tell Simple ORM to use the connection you just created.
SimpleOrm::useConnection($conn, 'tp_php_projet');
}

?>