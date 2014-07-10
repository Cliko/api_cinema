<?php

class UsersController{
    function __construct(){
        global $mysqli;
        $this->mysqli = &$mysqli;
    }

	public function get(){
        $sql = "SELECT id, username FROM  users";
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
        if(isset($_POST["username"])){$username = $_POST["username"];}
        if(isset($username)){
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


}