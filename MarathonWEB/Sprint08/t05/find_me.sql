USE ucode_web

SELECT heroes.id, heroes.name,heroes.description,heroes.race,heroes.class_role
FROM (
    SELECT MIN(heroesWithAAndSelectClass_roleNotHumanCountTeamsMore2.id) as id
    FROM (
        SELECT *
        FROM (
            SELECT COUNT(teams.hero_id) as count,heroesWithAAndSelectClass_roleNotHuman.id
            FROM (
                SELECT *
                FROM (
                    SELECT *
                    FROM (
                        SELECT *
                        FROM heroes
                        WHERE heroes.name LIKE '%a%'
                    ) as heroesWithA
                    WHERE heroesWithA.class_role='tankman' OR heroesWithA.class_role='healer'
                ) as heroesWithAAndSelectClass_role
                WHERE NOT heroesWithAAndSelectClass_role.race='Human'
            ) as heroesWithAAndSelectClass_roleNotHuman
            JOIN teams ON heroesWithAAndSelectClass_roleNotHuman.id=teams.hero_id
            GROUP BY heroesWithAAndSelectClass_roleNotHuman.id
        ) as heroesWithAAndSelectClass_roleNotHumanCountTeams
        WHERE heroesWithAAndSelectClass_roleNotHumanCountTeams.count>1
    ) as heroesWithAAndSelectClass_roleNotHumanCountTeamsMore2
) as heroesWithAAndSelectClass_roleNotHumanCountTeamsMore2MinId
JOIN heroes ON heroesWithAAndSelectClass_roleNotHumanCountTeamsMore2MinId.id=heroes.id