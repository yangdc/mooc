<?php
$pw= md5('king');
$sql = "insert into imooc_admin(username, password,email) values('king','$pw','946292109@qq.com')";
echo $sql;
echo 'wxx';
?>
