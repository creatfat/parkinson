<?php
 require_once __DIR__ . '../../../connect/database.php';
 
$noteid=strval($_GET['noteId']);
$notemessage=strval($_GET['message-text']);

$sql = "UPDATE note SET note='$notemessage' WHERE noteid='$noteid'";
$result = $conn->query($sql);

header('location:http://plustor.ir/show/researchers/researcher.php');
