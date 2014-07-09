<?php

class LiaisonsController{

    function __construct(){
        global $mysqli;
        $this->mysqli = &$mysqli;
    }

    public function get($user_id,$string){
        if($string == "likes"){
            $sql = "SELECT title,cover,genre
                    FROM movies,liaisons
                    WHERE movies.id = liaisons.movie_id AND liaisons.like = 1 AND liaisons.user_id = ".$user_id.";
                    ";
        }elseif($string == "dislikes"){
            $sql = "SELECT title,cover,genre
                    FROM movies,liaisons
                    WHERE movies.id = liaisons.movie_id AND liaisons.dislike = 1 AND liaisons.user_id = ".$user_id.";
                    ";
        }elseif($string == "watched"){
            $sql = "SELECT title,cover,genre
                    FROM movies,liaisons
                    WHERE movies.id = liaisons.movie_id AND liaisons.watched = 1 AND liaisons.user_id = ".$user_id.";
                    ";
        }elseif($string == "watchlist"){
            $sql = "SELECT title,cover,genre
                    FROM movies,liaisons
                    WHERE movies.id = liaisons.movie_id AND liaisons.watchlist = 1 AND liaisons.user_id = ".$user_id.";
                    ";
        }
        $data = array();
        if( $results = $this->mysqli->query($sql)){
            while( $row = $results->fetch_array(MYSQLI_ASSOC) ){
                $data[] = $row;
            }
        }
        API::status(200);
        API::response($data);
    }
}