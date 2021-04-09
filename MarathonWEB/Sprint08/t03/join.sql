USE ucode_web
SELECT heroes.id, heroes.name,heroes.description,heroes.race,heroes.class_role,teams.name
FROM heroes LEFT JOIN teams ON heroes.id=teams.hero_id;
SELECT heroes.id, heroes.name,heroes.description,heroes.race,heroes.class_role,powers.name
FROM heroes LEFT JOIN powers ON heroes.id=powers.hero_id
UNION
SELECT heroes.id, heroes.name,heroes.description,heroes.race,heroes.class_role,powers.name
FROM heroes RIGHT JOIN powers ON heroes.id=powers.hero_id;

SELECT DISTINCT heroes.id, heroes.name, teams.name, powers.name
FROM heroes
JOIN (powers, teams) ON (heroes.id = powers.hero_id AND heroes.id = teams.hero_id);