<?php
require_once '../include.php';

$username = $_POST['username'];
$password = md5($_POST['password']);
$verify = $_POST['verify'];
$verify1 = $_SESSION['verify'];
$autoFlag = isset($_POST['autoFlag'])?$_POST['autoFlag']:'';


if($verify == $verify1){
    $sql = "select * from imooc_admin where username='{$username}' and password='{$password}'";
    $res = checkAdmin($sql);
    if($res){
        if($autoFlag){
            setcookie("adminId", $row['id'],  time()+7*24*3600);
            setcookie("adminName",$res['username'], time()+7*24*3600);
        }
        $_SESSION['adminName'] = $res['username'];
        $_SESSION['adminId'] = $res['id'];
        header("location:index.php");
    }else{
        alertMes("登陆失败，重新登陆", "login.php");
    }  
    
}else{
    
    alertMes("验证码错误", "login.php");
    
    
}