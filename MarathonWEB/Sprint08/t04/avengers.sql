USE ucode_web
SELECT * 
FROM (
    SELECT heroes.id, SUM(powers.points) sum,heroes.name
    FROM heroes JOIN powers ON heroes.id = powers.hero_id
    GROUP BY heroes.id
) as h
LEFT  JOIN heroes ON h.id=heroes.id
WHERE h.sum=(SELECT MAX(h.sum)
FROM (
    SELECT heroes.id, SUM(powers.points) sum,heroes.name
    FROM heroes JOIN powers ON heroes.id = powers.hero_id
    GROUP BY heroes.id
) as h
RIGHT JOIN heroes ON h.id=heroes.id);



SELECT * 
FROM (
    SELECT heroes.id, SUM(powers.points) sum,heroes.name
    FROM heroes JOIN powers ON heroes.id = powers.hero_id
    GROUP BY heroes.id
) as h
LEFT  JOIN heroes ON h.id=heroes.id
WHERE h.sum=(SELECT MIN(h.sum)
FROM (
    SELECT heroes.id, SUM(powers.points) sum,heroes.name
    FROM heroes JOIN powers ON heroes.id = powers.hero_id
    GROUP BY heroes.id
) as h
RIGHT JOIN heroes ON h.id=heroes.id);



SELECT SUM(h.sum) as powder, teams.name
FROM (
    SELECT heroes.id, SUM(powers.points) sum,heroes.name
    FROM heroes JOIN powers ON heroes.id = powers.hero_id
    GROUP BY heroes.id
) as h
JOIN teams ON h.id=teams.hero_id
WHERE teams.name='Avengers' OR teams.name='S.H.I.E.L.D.'
GROUP BY teams.name
ORDER BY SUM(h.sum);