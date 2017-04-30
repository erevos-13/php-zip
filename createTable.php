<?php

include('connect.php');

// sql to create table
$sql = "CREATE TABLE `file` (
    `id`        Int Unsigned Not Null Auto_Increment,
    `name`      VarChar(255) Not Null Default 'Untitled.txt',
    `mime`      VarChar(50) Not Null Default 'text/plain',
    `size`      BigInt Unsigned Not Null Default 0,
    `data`      MediumBlob Not Null,
    `created`   DateTime Not Null,
    PRIMARY KEY (`id`)
)";


if ($conn->query($sql) === TRUE) {
    echo "Table file created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();


?>