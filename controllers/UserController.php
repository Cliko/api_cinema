<?php

class UserController{
    function __construct(){
        global $mysqli;
        $this->mysqli = &$mysqli;
    }

	public function get($id){
        $sql = "SELECT username FROM  users WHERE id=".$id."";
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
                if ($key=='username') {$username=$value; }
            }
            $sql = "UPDATE `users` SET ";
            if (isset($username)) $sql .= "`username`= '".$username."'";
            $sql .= " WHERE `id`= ".$id.";";
            $this->mysqli->query( $sql ) or die ("could not execute: $sql " . mysql_error());
            $output = "Mofication valid";
        }else {
            $output = "No result !";
        }

    }

    public function delete($id){
        $sql = "DELETE FROM `users` WHERE `id`= ".$id.";";
        $this->mysqli->query( $sql ) or die ("could not execute: $sql " . mysql_error());
    }
}