<?php

class MoviesController{

    function __construct(){
        global $mysqli;
        $this->mysqli = &$mysqli;
    }

    public function get(){
        $sql = "SELECT id,title,cover,genre FROM  movies";
        $data = array();
        if( $results = $this->mysqli->query($sql)){
            while( $row = $results->fetch_array(MYSQLI_ASSOC) ){
                $data[] = $row;
            }
        }
        API::status(200);
        API::response($data);
    }
    public function post(){
            $title = $_POST["title"];
            $cover = $_POST["cover"];
            $genre = $_POST["genre"];
            $sql = "INSERT INTO
						`movies`
					(
						`title` ,
						`cover`,
						`genre`
					) VALUES (
						'" . $title .  "',
						'" . $cover .  "',
						'" . $genre .  "'
					);";
            $this->mysqli->query( $sql );
            return array( 'id' => $this->mysqli->insert_id);
    }
}