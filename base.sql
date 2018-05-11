create database base_site;
use base_site;
create table Users(
	id int auto_increment, #identifiant (avec des numéros)
  pseudo varchar(10) NOT NULL, #nom de l'utilisateur
	mdp varchar(20) NOT NULL, #son mot de passe
	prenom varchar(45) NOT NULL, #son prenom
	nom varchar(45) NOT NULL, #son nom
	tel varchar(15) NOT NULL, #son numero de telephone
	adresse varchar(45) NOT NULL, #son adresse 
	ville varchar(45) NOT NULL, #sa ville
	email varchar(45) NOT NULL, #son adresse e-mail
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
  titre varchar(45) NOT NULL, #titre de la publication
  categories text, #nom des categories séparées par des point virgules
  description text, #description (fiche technique de l'objet)
  image varchar(255), #image de l'objet
  commentaire text, #les id des commentaires séparées par des point virgules
  auteur varchar(45) NOT NULL,
	PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

select * from article;
select * from Users;
SELECT * FROM article WHERE titre LIKE '%$teste%' OR description LIKE '%$teste%';