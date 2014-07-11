# Utilisateurs
#### Structure d'un utilisateur ####
```
{
	"data":[
		{
			"id": 1,
			"username": "Maëlle"
		},
		{
			"id": 2,
			"username": "Anaïs"
		},
		{...}
	]
}
```
## Gestion des informations utilisateurs ##
#### Lister les utiliseurs ####
```
/users
```
#### Créer un utilisateur ####
```
/users + POST
```
#### Voir le profil d'un utilisateur ####
```
/users/:user_id
```
#### Mettre à jour un utilisateur ####
```
/users/:user_id + PUT
```
#### Supprimer un utilisateur ####
```
/users/:user_id + DELETE
```
## Gestion des actions ##
#### Lister des films que l'utilisateur aime ####
```
/users/:user_id/likes
```
#### Aimer un film ####
```
/users/:user_id/likes
```
#### Ne plus aimer un film ####
```
/users/:user_id/likes/:movie_id + DELETE
```
#### Liste les films que l'utilisateur n'aime pas ####
```
/users/:user_id/dislikes
```
#### Ne pas aimer un film  ####
```
/users/:id/dislikes/:movie_id + POST
```
#### Supprimer avis négatif du film  ####
```
/users/:id/dislikes/:movie_id + DELETE
```
#### Lister les films que l'utilisateur a vu  ####
```
/users/:id/watched
```
#### Ajouter un film vu  ####
```
/users/:id/watched/:movie_id + POST
```
#### Supprimer un film vu ####
```
/users/:id/watched/:movie_id + DELETE
```
#### Lister les films qu'un utilisateur a vu ####
```
/users/:id/watchlist
```
#### Ajouter un film à voir ####
```
/users/:id/watchlist/:movie_id + POST
```
#### Supprimer un film à voir ####
```
/users/:id/watchlist/:movie_id + DELETE
```


---

# Films

#### Structure d'un film ####
```
{
	"data": {
		"id": 3,
		"title": "Jimmy's Hall",
		"cover":"http://domain.com/cover.png",
		"genre":2
	}
}
```
#### Lister tout les films ####
```
/movies
```
#### Créer un film ####
```
/movies + POST
```
#### Voir la fiche d'un film ####
```
/movies/:movie_id
```
#### Mettre à jour un film ####
```
/movies/:id + PUT
```
#### Supprimer un film ####
```
/movies/:id + DELETE
```
