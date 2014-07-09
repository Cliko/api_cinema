<?php

class MovieController{

    function __construct(){
        global $mysqli;
        $this->mysqli = &$mysqli;
    }

    public function get($id){
        $sql = "SELECT title,cover,genre FROM  movies where id =".$id."";
        $data = array();
        if( $results = $this->mysqli->query($sql)){
            while( $row = $results->fetch_array(MYSQLI_ASSOC) ){
                $data[] = $row;
            }
        }
        API::status(200);
        API::response($data);
    }

    public function put($id){
        if($_SERVER['REQUEST_METHOD'] == 'PUT') {
            $_PUT = array();
            parse_str(file_get_contents("php://input"),$_PUT);
            foreach ($_PUT as $key => $value) {
                if ($key=='title') {$title=$value; }
                if ($key=='cover') {$cover=$value; }
                if ($key=='genre') {$genre=$value; }
            }
            $sql = "UPDATE `movies` SET ";
            if (isset($title)){ $sql .= "`title`= '".$title."'";}
            if (isset($cover) AND $sql == "UPDATE `movies` SET " ){ $sql .= "`cover`= '".$cover."'";}
            elseif(isset($cover)){$sql .= ",`cover`= '".$cover."'";}
            if (isset($genre) AND $sql == "UPDATE `movies` SET " ) {$sql .= "`genre`= '".$genre."'";}
            elseif(isset($genre)){$sql .= ",`genre`= '".$genre."'";}
            $sql .= "	WHERE `id`= ".$id.";";
            $this->mysqli->query( $sql ) or die ("could not execute: $sql " . mysql_error());
            $output = "Mofication valid";
        }else {
            $output = "No result !";
        }

    }

    public function delete($id){
        $sql = "DELETE FROM `movies` WHERE `id`= ".$id.";";
        $this->mysqli->query( $sql ) or die ("could not execute: $sql " . mysql_error());
    }
}