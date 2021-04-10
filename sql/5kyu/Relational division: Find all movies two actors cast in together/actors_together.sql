SELECT film.title
FROM film
INNER JOIN film_actor crowe ON film.film_id = crowe.film_id AND crowe.actor_id = 105
INNER JOIN film_actor nolte ON film.film_id = nolte.film_id AND nolte.actor_id = 122
ORDER BY film.title;
