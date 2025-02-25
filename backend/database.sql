CREATE DATABASE my_tasks CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci; USE my_tasks;

CREATE TABLE task (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    completed BOOLEAN DEFAULT FALSE
);



