CREATE DATABASE bd_cnrs;

CREATE TABLE bd_cnrs.laboratoires (
	id INT NOT NULL AUTO_INCREMENT,
	nom VARCHAR(100) NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE bd_cnrs.disciplines (
	id INT NOT NULL AUTO_INCREMENT,
	nom VARCHAR(50) NOT NULL,
	description VARCHAR(200),
	PRIMARY KEY (id)
);

CREATE TABLE bd_cnrs.ateliers (
	id INT NOT NULL AUTO_INCREMENT,
	titre VARCHAR(100) NOT NULL,
	etat ENUM('ACT', 'DES') NOT NULL DEFAULT 'ACT',
	theme TEXT NOT NULL,
	type VARCHAR(100) NOT NULL,
	id_laboratoire INT,
	lieu TEXT NOT NULL,
	duree INT NOT NULL,
	capacite INT NOT NULL,
	resume TEXT NOT NULL,
	animateur VARCHAR(200) NOT NULL,
	public_primaire ENUM('OUI', 'NON') NOT NULL DEFAULT 'NON',
	public_6_5 ENUM('OUI', 'NON') NOT NULL DEFAULT 'NON',
	public_4_3 ENUM('OUI', 'NON') NOT NULL DEFAULT 'NON',
	public_2 ENUM('OUI', 'NON') NOT NULL DEFAULT 'NON',
	public_1 ENUM('OUI', 'NON') NOT NULL DEFAULT 'NON',
	public_tale ENUM('OUI', 'NON') NOT NULL DEFAULT 'NON',
	public_classes_preparatoires ENUM('OUI', 'NON') NOT NULL DEFAULT 'NON',
	public_universite ENUM('OUI', 'NON') NOT NULL DEFAULT 'NON',
	PRIMARY KEY (id),
	FOREIGN KEY (id_laboratoire) REFERENCES laboratoires (id)
);

CREATE TABLE bd_cnrs.ateliers_disciplines (
	id INT NOT NULL AUTO_INCREMENT,
	id_atel INT NOT NULL,
	id_disc INT NOT NULL,
	PRIMARY KEY (id),
	UNIQUE KEY id_atel_disc (id_atel ,id_disc ),
	FOREIGN KEY (id_atel) REFERENCES ateliers (id),
	FOREIGN KEY (id_disc) REFERENCES disciplines (id)
);
