create table Users(
	id int auto_increment,
    pseudo varchar(10) NOT NULL,
	mdp varchar(20) NOT NULL,
	prenom varchar(45) NOT NULL,
	nom varchar(45) NOT NULL,
	tel varchar(15) NOT NULL,
	adresse varchar(45) NOT NULL,
	ville varchar(45) NOT NULL,
	email varchar(45) NOT NULL,
	id_billet int(255) NOT NULL,
    article text,
    commentaire text,
	PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

create table Commentaire(
	id int auto_increment,
    titre varchar(45),
    commentaire text,
    date_creation datetime,
	PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

create table Comment_admin(
	id int auto_increment,
    commentaire text,
    date_creation datetime,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

create table article(
	id int auto_increment,
    titre varchar(45) NOT NULL,
    description text,
    image varchar(255),
    commentaire text,
	PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;