<?php

function checkAdmin($sql){
    return fetchOne($sql);
}

function checkLogined(){
    if(!isset($_SESSION['adminId'])&& !isset($_COOKIE['adminId'])){
        alertMes("请先登陆", "login.php");
    }
}

function logout(){
    $_SESSION = array();
    if(isset($_COOKIE[session_name()])){
        setcookie(session_name(),"", time()-1);
    }
    if(isset($_COOKIE['adminId'])){
        setcookie('adminId',"", time()-1);
    }
    if(isset($_COOKIE['adminName'])){
        setcookie('adminId',"", time()-1);
    }
    session_destroy();
    header("location:login.php");
     
}