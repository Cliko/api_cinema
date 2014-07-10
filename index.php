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


Toro::serve(array(
    "/movies" => "MoviesController",
    "/movies/:number" => "MovieController",
    "/users" => "UsersController",
    "/users/:number" => "UserController",
    "/users/:number/:string" => "LiaisonsController",
    "/users/:number/:string/:number" => "LiaisonController",
    "/search" => "SearchController",
    "/users/:id/follow" => "FollowController",
    "/users/:id/follow/:id" => "FollowsController",
    "/users/:id/followers" => "FollowersController",
));

?>