SELECT
    *
FROM
    etudiants
WHERE
    TIMESTAMPDIFF (YEAR, naissance, CURDATE ()) < 18;