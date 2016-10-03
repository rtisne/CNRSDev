SELECT id, titre FROM ateliers 
ORDER BY id DESC;

SELECT a.*
FROM ateliers a
WHERE a.id = $id;

INSERT INTO ateliers(
	titre,
	theme,
	type,
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
	$8		
);

UPDATE ateliers
SET titre = $1,
	theme = $2,
	type = $3,
	lieu = $4,
	duree = $5,
	capacite = $6,
	resume = $7,
	animateur = $8
WHERE id = $id;

DELETE FROM ateliers_disciplines
WHERE id_atel = $id;

DELETE FROM ateliers 
WHERE id = $id;


