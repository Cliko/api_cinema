# Création de la base de données

# Utilisateurs
#### Structure d'un utilisateur ####
```
{
	"data":[
		{
			"id": 1,
			"username": "Cliko"
		},
		{
			"id": 2,
			"username": "Titia"
		},
		{...}
	]
}
```
## Gestion des informations utilisateurs ##
#### Lister les utiliseurs ####
```
/v1/users
```
#### Créer un utilisateur ####
```
/v1/users + POST
```
#### Voir le profil d'un utilisateur ####
```
/v1/users/:user_id
```
#### Mettre à jour un utilisateur ####
```
/v1/users/:user_id + PUT
```
#### Supprimer un utilisateur ####
```
/v1/users/:user_id + DELETE
```
## Gestion des actions ##
#### Lister des films que l'utilisateur aime ####
```
/v1/users/:user_id/likes
```
#### Aimer un film ####
```
/v1/users/:user_id/likes
```
#### Ne plus aimer un film ####
```
/v1/users/:user_id/likes/:movie_id + DELETE
```
#### Liste les films que l'utilisateur n'aime pas ####
```
/v1/users/:user_id/dislikes
```
#### Ne pas aimer un film  ####
```
/v1/users/:id/dislikes/:movie_id + POST
```
#### Supprimer avis négatif du film  ####
```
/v1/users/:id/dislikes/:movie_id + DELETE
```
#### Lister les films que l'utilisateur a vu  ####
```
/v1/users/:id/watched
```
#### Ajouter un film vu  ####
```
/v1/users/:id/watched/:movie_id + POST
```
#### Supprimer un film vu ####
```
/v1/users/:id/watched/:movie_id + DELETE
```
#### Lister les films qu'un utilisateur a vu ####
```
/v1/users/:id/watchlist
```
#### Ajouter un film à voir ####
```
/v1/users/:id/watchlist/:movie_id + POST
```
#### Supprimer un film à voir ####
```
/v1/users/:id/watchlist/:movie_id + DELETE
```


---

# Films

#### Structure d'un film ####
```
{
	"data": {
		"id": 3,
		"title": "Dragon 2",
		"cover":"http://domain.com/dragon2.png",
		"genre":2
	}
}
```
#### Lister tout les films ####
```
/v1/movies
```
#### Lister tout les genres ####
```
/v1/genres
```
#### Créer un film ####
```
/v1/movies + POST
```
#### Voir la fiche d'un film ####
```
/v1/movies/:movie_id
```
#### Mettre à jour un film ####
```
/v1/movies/:id + PUT
```
#### Supprimer un film ####
```
/v1/movies/:id + DELETE
```
