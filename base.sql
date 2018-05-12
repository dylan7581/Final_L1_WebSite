create database base_site;
use base_site;
create table Users(
	id int auto_increment, #identifiant (avec des numéros)
  pseudo varchar(40) NOT NULL, #nom de l'utilisateur
	mdp varchar(40) NOT NULL, #son mot de passe
	prenom varchar(45) NOT NULL, #son prenom
	nom varchar(45) NOT NULL, #son nom
	tel varchar(10) NOT NULL, #son numero de telephone
	adresse text NOT NULL, #son adresse 
	ville varchar(45) NOT NULL, #sa ville
	email text NOT NULL, #son adresse e-mail
  article text, #les id de ses publications séparées par des points virgules
  commentaire text, #les id des commentaires séparées par des points virgules
	PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

create table Commentaire(
	id int auto_increment, #identifiant (avec des numéros)
  titre varchar(45), #titre du commentaire
  commentaire text, # commentaires écrit par l'utilisateur.
  date_creation datetime, #la date de création du commentaire.
	PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

create table Comment_admin(
	id int auto_increment, #identifiant (avec des numéros)
  commentaire text, #commentaire écrit par l'administrateur
  date_creation datetime, #la date de création du commentaire
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

create table article(
	id int auto_increment, #identifiant (avec des numéros)
  titre varchar(50) NOT NULL, #titre de la publication
  categories text, #nom des categories séparées par des point virgules
  description text, #description (fiche technique de l'objet)
  image varchar(255), #image de l'objet
  commentaire text, #les id des commentaires séparées par des point virgules
  auteur varchar(40) NOT NULL,
	PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

select * from article;
select * from Users;
select * from Comment_admin;
INSERT INTO Comment_admin VALUES(null, "maintenance le 2018-07-30.", NOW());