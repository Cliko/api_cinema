<?php

class GenresController{

    function __construct(){
        global $mysqli;
        $this->mysqli = &$mysqli;
    }

    public function get(){
        $sql = "SELECT * FROM  `genres` ";
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