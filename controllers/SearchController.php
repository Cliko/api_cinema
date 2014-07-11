<?php

class SearchController{
    /*function __construct(){
        global $mysqli;
        $this->mysqli = &$mysqli;
    }*/

	public function get(){
        echo $_SERVER['REQUEST_URI'];
        echo 'réussi';
        exit;
	}
}