<?php
require_once '../include.php';
$act = $_REQUEST['act'];
$id = isset($_REQUEST['id'])?$_REQUEST['id']:'';
if($act == 'logout'){
    logout();
}elseif($act == 'addAdmin'){
	$mes = addAdmin();
}elseif($act == 'editAdmin'){
	$mes = editAdmin($id);
}elseif($act == 'delAdmin'){
	$mes = delAdmin($id);
}elseif($act == 'addCate'){
	$mes = addCate();
}elseif($act == 'editCate'){
	$id = $_REQUEST['id'];
	$where = "id={$id}";
	$mes = editCate($where);
}elseif($act == 'delCate'){
	$where = "id={$id}";
	$mes = delCate($where);
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<?php 
	if($mes){
		echo $mes;
	}
?>
</body>
</html>
