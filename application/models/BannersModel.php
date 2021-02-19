<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BannersModel extends CI_Model{
    
    public function listAll(){
        $query = $this->db->query('select name, path from ellisdev.banners');
        return $query->result();
    }
    private function connectDatabase(){
        // $servername = "localhost";
        // $username = "israel";
        // $password = "blender3d";
        // $dbname = "ellisdev";

        // $dsn = 'mysql:host=localhost;dbname=ellisdev';
        // $options = array(
        //     PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        // ); 
        // $dbh = new PDO($dsn, $username, $password, $options);

        // $dsn = 'mysqli://israel:blender3d@localhost/ellisdev';
        // $this->load->database();
    }
}