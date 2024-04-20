# Отчет по девятой лабораторной работе

1. [Описание проекта](#1-описание-проекта).
2. [Краткая документация к проекту](#2-краткая-документация-к-проекту).
3. [Список использованных источников](#3-список-использованных-источников).

## 1. Описание проекта

Этот проект представляет собой базу данных для блога, где пользователи могут регистрироваться, оставлять комментарии и взаимодействовать друг с другом. Основные компоненты проекта включают таблицы для пользователей и комментариев.Для работы проекта нужны программы, которые поддерживают MySql

## 2. Краткая документация к проекту

Структура базы данных blog:

Таблица users:

- id (integer, primary key) - идентификатор пользователя
-  name (text) - имя пользователя
- surname (text) - фамилия пользователя
- email (text, unique key) - электронная почта пользователя (уникальный ключ)

Таблица comments:

- id (integer, primary key) - идентификатор комментария
- user_id (integer, foreign key) - ссылка на пользователя, который оставил комментарий
- comment (text) - текст комментария
- Таким образом, создана база данных blog с таблицами users и comments, соответствующими заданным структурам.

2.1 Код целиком:

```sql
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



```

## 3. Список использованных источников

1. [MySQL Documentration](https://dev.mysql.com/doc/)
