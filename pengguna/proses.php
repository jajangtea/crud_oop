<?php
include '../pengguna/model.php';
if (isset($_POST['submit_simpan'])) {
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jk'];
    $model = new Model();
    $model->insert($nama, $umur, $tanggal_lahir, $jenis_kelamin);
    header('location:index.php');
}

if (isset($_POST['submit_edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jk'];
    $model = new Model();
    $model->update($nama, $umur, $tanggal_lahir, $jenis_kelamin,$id);
    header('location:index.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $model = new Model();
    $model->delete($id);
    header('location:index.php');
}

