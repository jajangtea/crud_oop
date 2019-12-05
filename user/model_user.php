<?php
include '../Koneksi.php';
class Model_user extends Koneksi
{
    public function __construct()
    {
        $this->kon = $this->get_koneksi();
    }

    public function check_login($username, $password)
    {
        $sql = "select count(*) as jml_user from user where username='$username' and password='$password'";
        $bind = $this->kon->query($sql);
        while ($obj = $bind->fetch_object()) {
            $jml = $obj->jml_user;
        }
        return $jml;
    }

    public function alogin($username, $password){
        if($this->check_login($username,$password)==0){
            header('location:login.php?pesan=Login gagal');
        }else{
            header('location:../pengguna/index.php?pesan=Login berhasil');
        }
    }
}
