<?php 
class Koneksi{
    public function get_koneksi(){
        $host="localhost";
        $db="akademik";
        $username="root";
        $pass="";

        $con=new mysqli($host,$username,$pass,$db);
        return $con;
    }
}