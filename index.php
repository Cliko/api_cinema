<?php

$mysqli = new mysqli( 'localhost' , 'root' , '' , 'cinema'  );
$mysqli->set_charset( 'utf8' );
require("libs/toro.php");
require("components/api.php");
require("controllers/MoviesController.php");
require("controllers/MovieController.php");
require("controllers/UsersController.php");
require("controllers/UserController.php");
require("controllers/LiaisonsController.php");
require("controllers/LiaisonController.php");
require("controllers/FollowController.php");
require("controllers/FollowsController.php");
require("controllers/FollowersController.php");
require("controllers/SearchController.php");
require("controllers/GenresController.php");


Toro::serve(array(
    "/v1/movies" => "MoviesController",
    "/v1/movies/:number" => "MovieController",
    "/v1/users" => "UsersController",
    "/v1/users/:number" => "UserController",
    "/v1/users/:number/:string" => "LiaisonsController",
    "/v1/users/:number/:string/:number" => "LiaisonController",
    "/v1/search" => "SearchController",
    "/v1/users/:id/follow" => "FollowController",
    "/v1/users/:id/follow/:id" => "FollowsController",
    "/v1/users/:id/followers" => "FollowersController",
    "/v1/genres" => "GenresController",
));

?>