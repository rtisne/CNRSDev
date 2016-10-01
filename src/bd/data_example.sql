insert into laboratoires (nom) values ('Centre de Recherche Paul Pascal');

insert into laboratoires (nom) values ('Laboratoire Bordelais de Rechercheen Informatique');

insert into laboratoires (nom) values ('Laboratoire de lIntégration du Matériau au Système');


INSERT INTO ateliers(
	titre,
	theme,
	type,
	id_laboratoire,
	lieu,
	duree,
	capacite,
	resume,
	animateur
) VALUES 
(
	'Liquides durs et solides mous',
	'découverte des fluides complexes, gels, materiaux granulaires...',
	'Atelier scientifique',
	2,
	'Centre de Recherche Paul Pascal CPPP, CNSN, 115 Avenue du Dr Scheweitzer, 33600 pessac',
	30,
	12,
	'Les fluides complexes nous accompagnent dans notre quoitidien: les shampoings, mousses et savons dans notre salle de bains, le dantifrice, les mayonnaises ou autres émulsions dans la cuisine... ',
	'Martin Depardieu (Doctorant) et Chistophe Coutant (Doctorant) '		
);

UPDATE ateliers
SET titre = 'Liquides durs et solides mous',
	theme = 'découverte des fluides complexes, gels, materiaux granulaires...',
	type = 'Atelier scientifique',
	id_laboratoire = 1,
	lieu = 'Centre de Recherche Paul Pascal CPPP, CNSN, 115 Avenue du Dr Scheweitzer, 33600 pessac',
	duree = 60,
	capacite = 15 ,
	resume = 'Les fluides complexes nous accompagnent dans notre quoitidien: les shampoings, mousses et savons dans notre salle de bains, le dantifrice, les mayonnaises ou autres émulsions dans la cuisine... ',
	animateur = 'Martin Depardieu (Doctorant) et Chistophe Coutant (Doctorant)'
WHERE id = 1