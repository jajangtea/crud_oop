<?php
include '../Koneksi.php';
class Model extends Koneksi
{
    public function __construct()
    {
        $this->kon = $this->get_koneksi();
    }

    public function aksi_simpan()
    {
        if (isset($_POST['submit'])) {
            echo "simpan";
        } else {
            echo "simpan";
            echo "<script>windows.location.href='../views/create.php';</script>";
        }
    }

    public function insert($nama, $umur, $tanggal_lahir, $jenis_kelamin)
    {
        $sql = "insert into pengguna(nama,umur,tanggal_lahir,jenis_kelamin) values ('$nama','$umur','$tanggal_lahir','$jenis_kelamin')";
        $this->kon->query($sql);
    }

    public function tampil_data()
    {
        $sql = "select * from pengguna";
        $bind = $this->kon->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        return $baris;
    }
    public function edit($id)
    {
        $sql = "select * from pengguna where id='$id'";
        $bind = $this->kon->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris = $obj;
        }
        return $baris;
    }

    public function update($nama, $umur, $tanggal_lahir, $jenis_kelamin, $id)
    {
        $sql = "update pengguna set nama='$nama',umur='$umur',tanggal_lahir='$tanggal_lahir',jenis_kelamin='$jenis_kelamin' where id='$id'";
        $this->kon->query($sql);
    }

    public function delete($id)
    {
        $sql = "delete from pengguna where id='$id'";
        $this->kon->query($sql);
    }
}
