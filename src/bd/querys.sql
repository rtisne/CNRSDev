SELECT id, titre FROM ateliers 
ORDER BY id DESC;

SELECT a.*, l.nom as nom_laboratoire
FROM ateliers a, laboratoires l
WHERE a.id_laboratoire = l.id AND a.id = $id;

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
	$1,
	$2,
	$3,
	$4,
	$5,
	$6,
	$7,
	$8,
	$9		
);

UPDATE ateliers
SET titre = $1,
	theme = $2,
	type = $3,
	id_laboratoire = $4,
	lieu = $5,
	duree = $6,
	capacite = $7,
	resume = $8,
	animateur = $9
WHERE id = $id;

DELETE FROM ateliers_disciplines
WHERE id_atel = $id;

DELETE FROM ateliers 
WHERE id = $id;


