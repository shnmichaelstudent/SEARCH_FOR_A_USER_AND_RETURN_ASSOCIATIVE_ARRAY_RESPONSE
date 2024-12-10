<?php
include 'functions.php';
$search = $_GET['search'] ?? '';
$applicants = getApplicants($search);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Job Application System</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <h1>Job Application System</h1>
    <form method="GET" action="">
        <input type="text" name="search" placeholder="Search..." value="<?= htmlspecialchars($search) ?>">
        <button type="submit">Search</button>
    </form>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Position</th>
                <th>Resume</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($applicants as $applicant): ?>
                <tr>
                    <td><?= htmlspecialchars($applicant['name']) ?></td>
                    <td><?= htmlspecialchars($applicant['email']) ?></td>
                    <td><?= htmlspecialchars($applicant['phone']) ?></td>
                    <td><?= htmlspecialchars($applicant['position_applied']) ?></td>
                    <td><a href="<?= htmlspecialchars($applicant['resume_link']) ?>" target="_blank">View</a></td>
                    <td>
                        <a href="update.php?id=<?= $applicant['id'] ?>">Edit</a> |
                        <a href="delete.php?id=<?= $applicant['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php include 'footer.php'; ?>
</body>
</html>
