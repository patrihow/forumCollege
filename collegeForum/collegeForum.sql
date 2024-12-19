CREATE DATABASE collegeForum;

CREATE TABLE collegeForum.user (
	id INT auto_increment primary key,
	name VARCHAR(25) NOT NULL,
    username VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    birthday DATE NOT NULL
);

CREATE TABLE collegeForum.articles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    content TEXT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    user_id INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES user(id)
);
USE collegeForum;

INSERT INTO user (name, username, password, birthday) 
VALUES ('Test User', 'testuser', '123', '2000-01-01');

-- Insérer un nouvel article
INSERT INTO articles (title, content, user_id) 
VALUES ('Titre article', 'Voici le contenu article de test. Ici se trouve le contenu que mon utilisateur va écrire', 1);

-- Insérer plus user
INSERT INTO user (name, username, password, birthday) 
VALUES ('Patricia Bravo', 'pbravo', '123', '1999-07-07');

CREATE DATABASE collegeForum;

CREATE TABLE collegeForum.user (
	id INT auto_increment primary key,
	name VARCHAR(25) NOT NULL,
    username VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    birthday DATE NOT NULL
);

CREATE TABLE collegeForum.articles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    content TEXT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    user_id INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES user(id)
);
USE collegeForum;

INSERT INTO user (name, username, password, birthday) 
VALUES ('Test User', 'testuser', '123', '2000-01-01');

-- Insérer un nouvel article
INSERT INTO articles (title, content, user_id) 
VALUES ('Titre article', 'Voici le contenu article de test. Ici se trouve le contenu que mon utilisateur va écrire', 1);

-- Insérer mon user
INSERT INTO user (name, username, password, birthday) 
VALUES ('Patricia Bravo', 'pbravo', '123', '1999-07-07');

INSERT INTO user (name, username, password, birthday) 
VALUES ('Marcos Sanches', 'msanches', '123', '1999-04-02');

INSERT INTO user (name, username, password, birthday) 
VALUES 
('Émilie Laurent', 'elaurent', '123', '2000-08-15'),
('Antoine Lemoine', 'alemoine', '123', '1998-12-05'),
('Chloé Dupont', 'cdupont', '123', '1997-03-22'),
('Camille Morel', 'cmorel', '123', '2001-06-10');

SELECT * FROM user;

SELECT * FROM articles;

INSERT INTO articles (title, content, user_id) 
VALUES 
('Études efficaces', 'Conseils pour réussir facilement vos examens', 2),
('5 astuces pour réussir ses études', 'Organise-toi, fixe des objectifs clairs et prendre soin de toi.', 3),
('Gestion temps', 'Organise-toi, fixe des objectifs clairs et prendre soin de toi.', 4),
('Santé mentale', 'Restez motivé et évitez le stress', 5),
('Projets groupés', 'Organise-toi, fixe des objectifs clairs et prendre soin de toi.', 6),
('Vie équilibrée', 'Combinez études et loisirs harmonieusement.', 7);




