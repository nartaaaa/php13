<?php
require 'config.php';

if(isset($_POST['username']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
}
$sql="SELECT * FROM users WHERE username=:username";
$insertSql=$conn->prepare($sql);
$insertSql->bindParam(':username',$username);
$insertSql->execute();
if($insertsql->rowCount()>0){
    $data
}

?>