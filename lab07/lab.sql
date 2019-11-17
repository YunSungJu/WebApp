-- SELECT * FROM movies
-- JOIN roles ON id = movie_id
-- WHERE name = 'Pi';

-- SELECT first_name, last_name
-- FROM movies m
-- JOIN roles r ON m.id = r.movie_id
-- JOIN actors a ON r.actor_id = a.id
-- WHERE m.name = 'Pi';
-- SELECT first_name, last_name FROM 

-- SELECT DISTINCT a.first_name, a.last_name
-- FROM 
-- 	(SELECT first_name, last_name
-- 	FROM actors a
-- 	JOIN roles r ON a.id = r.actor_id
-- 	JOIN movies m ON r.movie_id = m.id
-- 	WHERE m.name = 'Kill Bill: Vol. 1') a
-- INNER JOIN 
-- 	(SELECT first_name, last_name
-- 	FROM actors a
-- 	JOIN roles r ON a.id = r.actor_id
-- 	JOIN movies m ON r.movie_id = m.id
-- 	WHERE m.name = 'Kill Bill: Vol. 2') b
-- ON a.first_name=b.first_name and a.last_name=b.last_name;

-- SELECT a.first_name, a.last_name
-- FROM actors a
-- 	JOIN roles r ON a.id = r.actor_id
-- 	JOIN movies m ON r.movie_id = m.id
-- 	GROUP BY a.id 
-- 	ORDER BY count(a.id) desc LIMIT 7;

-- SELECT genre
-- FROM movies m
-- JOIN movies_genres g ON m.id = g.movie_id
-- GROUP BY g.genre
-- ORDER BY count(g.genre) desc LIMIT 3;

-- SELECT t.first_name, t.last_name, count(t.id)
-- FROM
-- (SELECT d.id, d.first_name, d.last_name
-- FROM movies_genres g
-- JOIN movies_directors md ON g.movie_id = md.movie_id
-- JOIN directors d ON md.director_id = d.id
-- WHERE genre = 'Thriller') t
-- GROUP BY t.id
-- ORDER BY count(t.id) desc LIMIT 1;
