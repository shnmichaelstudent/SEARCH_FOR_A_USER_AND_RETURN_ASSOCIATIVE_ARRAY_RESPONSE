CREATE TABLE applicants (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    position_applied VARCHAR(255) NOT NULL,
    resume_link TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO applicants (name, email, phone, position_applied, resume_link)
VALUES 
('John Smith', 'john.smith@email.com', '1234567890', 'Math Teacher', 'https://example.com/resume/johnsmith'),
('Jane Doe', 'jane.doe@email.com', '2345678901', 'Science Teacher', 'https://example.com/resume/janedoe'),
('Carlos Garcia', 'carlos.garcia@email.com', '3456789012', 'English Teacher', 'https://example.com/resume/carlosgarcia'),
('Maria Santos', 'maria.santos@email.com', '4567890123', 'History Teacher', 'https://example.com/resume/mariasantos'),
('Ahmed Khan', 'ahmed.khan@email.com', '5678901234', 'Computer Science Teacher', 'https://example.com/resume/ahmedkhan'),
('Sarah Lee', 'sarah.lee@email.com', '6789012345', 'Physical Education Teacher', 'https://example.com/resume/sarahlee'),
('David Brown', 'david.brown@email.com', '7890123456', 'Music Teacher', 'https://example.com/resume/davidbrown'),
('Emily Johnson', 'emily.johnson@email.com', '8901234567', 'Art Teacher', 'https://example.com/resume/emilyjohnson'),
('Joshua Liu', 'joshua.liu@email.com', '9012345678', 'Chemistry Teacher', 'https://example.com/resume/joshualiu'),
('Hannah Kim', 'hannah.kim@email.com', '0123456789', 'Biology Teacher', 'https://example.com/resume/hannahkim');

