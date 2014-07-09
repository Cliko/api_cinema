<?php

class UsersController{
    function __construct(){
        global $mysqli;
        $this->mysqli = &$mysqli;
    }

	public function get(){
        $sql = "SELECT username FROM  users";
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
        $username = $_POST["username"];
        $sql = "INSERT INTO
						`users`
					(
						`username`
					) VALUES (
						'" . $username .  "'
					);";
        $this->mysqli->query( $sql );
        return array( 'id' => $this->mysqli->insert_id);
    }


}