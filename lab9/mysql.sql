CREATE DATABASE IF NOT EXISTS blog;
USE blog;

CREATE TABLE users (
    id INTEGER PRIMARY KEY,
    name TEXT,
    surname TEXT,
    email TEXT UNIQUE
);

CREATE TABLE comments (
    id INTEGER PRIMARY KEY,
    user_id INTEGER,
    comment TEXT,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

INSERT INTO users (id, name, surname, email) VALUES
(1, 'Ivan', 'Ivanov', 'ivanov@example.com'),
(2, 'Maria', 'Petrova', 'petrova@example.com'),
(3, 'Alexey', 'Sidorov', 'sidorov@example.com');

INSERT INTO comments (id, user_id, comment) VALUES
(1, 1, 'This is a comment from Ivan.'),
(2, 1, 'Another comment by Ivan.'),
(3, 2, 'Maria makes a comment.'),
(4, 3, 'Alexey also comments.');

