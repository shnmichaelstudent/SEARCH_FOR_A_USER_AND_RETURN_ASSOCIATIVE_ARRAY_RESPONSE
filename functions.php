<?php
include 'db.php';

function getApplicants($search = '') {
    global $pdo;
    $sql = "SELECT * FROM applicants";
    if ($search) {
        $sql .= " WHERE name LIKE :search OR email LIKE :search OR phone LIKE :search OR position_applied LIKE :search";
    }
    $stmt = $pdo->prepare($sql);
    if ($search) {
        $stmt->bindValue(':search', '%' . $search . '%');
    }
    $stmt->execute();
    return $stmt->fetchAll();
}

function createApplicant($data) {
    global $pdo;
    try {
        $sql = "INSERT INTO applicants (name, email, phone, position_applied, resume_link) VALUES (:name, :email, :phone, :position_applied, :resume_link)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute($data);
        return ["message" => "Applicant added successfully!", "statusCode" => 200];
    } catch (PDOException $e) {
        return ["message" => "Error: " . $e->getMessage(), "statusCode" => 400];
    }
}

function updateApplicant($data) {
    global $pdo;
    try {
        $sql = "UPDATE applicants SET name = :name, email = :email, phone = :phone, position_applied = :position_applied, resume_link = :resume_link WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute($data);
        return ["message" => "Applicant updated successfully!", "statusCode" => 200];
    } catch (PDOException $e) {
        return ["message" => "Error: " . $e->getMessage(), "statusCode" => 400];
    }
}

function deleteApplicant($id) {
    global $pdo;
    try {
        $sql = "DELETE FROM applicants WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
        return ["message" => "Applicant deleted successfully!", "statusCode" => 200];
    } catch (PDOException $e) {
        return ["message" => "Error: " . $e->getMessage(), "statusCode" => 400];
    }
}
?>
