<?php
include 'functions.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $response = createApplicant($_POST);
    echo $response['message'];
}
?>
<form method="POST">
    <label>Name:</label><input type="text" name="name" required>
    <label>Email:</label><input type="email" name="email" required>
    <label>Phone:</label><input type="text" name="phone" required>
    <label>Position:</label><input type="text" name="position_applied" required>
    <label>Resume Link:</label><input type="url" name="resume_link">
    <button type="submit">Add Applicant</button>
</form>
