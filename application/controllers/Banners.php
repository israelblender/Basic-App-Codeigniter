<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banners extends CI_Controller{
    public function index(){
        // echo "<h1>Banners da Página aqui!</h1>";
        $result = $this->listArray();
        $dates = array("dates"=>$result);
       
        $this->load->view('banners/list', $dates);
        
    }
    public function listArray(){
        $this->load->model("BannersModel", "banMod");
        $result = $this->banMod->listAll();
        return $result;
        // foreach ($result as $row){
        //     echo $row->name;
        // }

        // echo '<pre>';
        // var_dump($result);
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

        // $query = $this->db->query('select name, path from ellisdev.banners');

        // $conn = new mysqli($servername, $username, $password, $dbname);
        // if ($conn->connect_error) {
        //     die("Conexão Falhou: " . $conn->connect_error);
        //   }else{
        //       echo "Conectado com sucesso!";
        //   }
        // echo $result->num_rows;
        // // return;

        
        

        // return $query->result_array();
    }
}