<?php

function addCate(){
	$arr = $_POST;
	if(insert('imooc_cate',$arr)){
		$mes = "分类添加成功!<br/><a href='addCate.php'>继续添加</a>|<a href='listCate.php'>查看分类列表</a>";
	}else{
		$mes = "分类添加失败!<br/><a href='addCate.php'>重新添加</a>|<a href='listCate.php'>查看分类列表</a>";
	}
	return $mes;
}