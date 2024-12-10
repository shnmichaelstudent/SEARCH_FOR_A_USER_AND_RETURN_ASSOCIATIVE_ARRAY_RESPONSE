<?php
include 'functions.php';
$id = $_GET['id'];
$applicant = getApplicants()[$id - 1]; // Simplified for demo

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $response = updateApplicant($_POST);
    echo $response['message'];
}
?>
<form method="POST">
    <input type="hidden" name="id" value="<?= $id ?>">
    <label>Name:</label><input type="text" name="name" value="<?= $applicant['name'] ?>" required>
    <label>Email:</label><input type="email" name="email" value="<?= $applicant['email'] ?>" required>
    <label>Phone:</label><input type="text" name="phone" value="<?= $applicant['phone'] ?>" required>
    <label>Position:</label><input type="text" name="position_applied" value="<?= $applicant['position_applied'] ?>" required>
    <label>Resume Link:</label><input type="url" name="resume_link" value="<?= $applicant['resume_link'] ?>">
    <button type="submit">Update Applicant</button>
</form>
