<?php
include '../user/model_user.php';
if(isset($_POST['username']) && isset($_POST['password'])){
    $username= $_POST['username'];
    $password= $_POST['password'];
    $model=new Model_user();
    $model->alogin($username,$password);
   
}