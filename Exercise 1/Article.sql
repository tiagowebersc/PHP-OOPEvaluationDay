CREATE DATABASE Exercise1;
USE Exercise1;
CREATE TABLE users (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(50) NOT NULL,
lastname VARCHAR(50) NOT NULL,
email VARCHAR(50) NOT NULL,
role VARCHAR(50) NOT NULL
);
CREATE TABLE articles(
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(50) NOT NULL,
content VARCHAR(50) NOT NULL,
picture VARCHAR(150) NOT NULL,
date_publish DATE NOT NULL,
id_user INT NOT NULL,
FOREIGN KEY (id_user) REFERENCES users(id)
);
INSERT INTO users (id, firstname, lastname, email, role) VALUES (1, 'Tiago', 'Weber', 'tiagowebersc@gmail.com', 'Engineer');
INSERT INTO articles (id, title, content, picture, date_publish, id_user) VALUES (10, 'Advanced PHP tricks', 'Very interesting ....', 'https://www.entropywins.wtf/blog/wp-content/uploads/2018/10/php-1.png', '2019-07-19', 1);

SELECT * FROM users u INNER JOIN articles a ON u.id = a.id_user WHERE a.id = 10;