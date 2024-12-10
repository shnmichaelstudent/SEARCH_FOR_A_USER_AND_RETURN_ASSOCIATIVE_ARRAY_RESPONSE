<?php
include 'functions.php';
$id = $_GET['id'];
$response = deleteApplicant($id);
echo $response['message'];
?>
<a href="index.php">Go Back</a>
