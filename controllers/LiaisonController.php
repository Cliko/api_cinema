<?php

class LiaisonController{

    function __construct(){
        global $mysqli;
        $this->mysqli = &$mysqli;
    }

    public function post($user_id,$string,$movie_id){
        $sql = "SELECT * FROM  liaisons WHERE  user_id =1 AND  movie_id =3 ;";
        $data = array();
        if( $results = $this->mysqli->query($sql)){
            while( $row = $results->fetch_array(MYSQLI_ASSOC) ){
                $data[] = $row;
            }
        }
        if($string == "likes"){
            if (!empty($data)){
                $sql = "UPDATE `liaisons` SET `likes` = 1, dislikes = 0 WHERE user_id = ".$user_id." AND movie_id =".$movie_id.";";
            }else{
                $sql = "INSERT INTO
                            `liaisons`
                        (
                            `user_id`,
                            `movie_id`,
                            `likes`
                        ) VALUES (
                            '".$user_id."',
                            '".$movie_id."',
                            '1'
                        );";
            }
        }elseif($string == "dislikes"){
            if (!empty($data)){
                $sql = "UPDATE `liaisons` SET `dislikes` = 1, `likes` = 0 WHERE user_id = ".$user_id." AND movie_id =".$movie_id.";";
            }else{
                $sql = "INSERT INTO
                            `liaisons`
                        (
                            `user_id`,
                            `movie_id`,
                            `dislike`
                        ) VALUES (
                            '".$user_id."',
                            '".$movie_id."',
                            '1'
                        );";
            }
        }elseif($string == "watched"){
            if (!empty($data)){
                $sql = "UPDATE `liaisons` SET `watched` = 1, `watchlist` = 0 WHERE user_id = ".$user_id." AND movie_id =".$movie_id.";";
            }else{
                $sql = "INSERT INTO
                            `liaisons`
                        (
                            `user_id`,
                            `movie_id`,
                            `watched`
                        ) VALUES (
                            '".$user_id."',
                            '".$movie_id."',
                            '1'
                        );";
            }
        }elseif($string == "watchlist"){
            if (!empty($data)){
                $sql = "UPDATE `liaisons` SET `watchlist` = 1, `watched` = 0 WHERE user_id = ".$user_id." AND movie_id =".$movie_id.";";
            }else{
                $sql = "INSERT INTO
                            `liaisons`
                        (
                            `user_id`,
                            `movie_id`,
                            `watchlist`
                        ) VALUES (
                            '".$user_id."',
                            '".$movie_id."',
                            '1'
                        );";
            }
        }
        $this->mysqli->query( $sql );
    }

    public function delete($user_id,$string,$movie_id){

        if($string == "likes"){
                $sql = "UPDATE `liaisons` SET `likes` = 0 WHERE user_id = ".$user_id." AND movie_id =".$movie_id.";";

        }elseif($string == "dislikes"){
                $sql = "UPDATE `liaisons` SET `dislikes` = 0 WHERE user_id = ".$user_id." AND movie_id =".$movie_id.";";

        }elseif($string == "watched"){
                $sql = "UPDATE `liaisons` SET `watched` = 0 WHERE user_id = ".$user_id." AND movie_id =".$movie_id.";";
        }elseif($string == "watchlist"){
                $sql = "UPDATE `liaisons` SET `watchlist` = 0 WHERE user_id = ".$user_id." AND movie_id =".$movie_id.";";
        }
        $this->mysqli->query( $sql );
    }
}