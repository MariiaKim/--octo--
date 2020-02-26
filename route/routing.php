<?php

$host=explode('?',$_SERVER['REQUEST_URI'])[0];
$num=substr_count($host,'/');
$way=explode('/',$host)[$num];

if($way==''|| $way=='index.php'){
	$response=controller::StartSite();

}
elseif($way=='flowers'){
	$response=controller::FlowerList();
}
elseif($way=='flower'){
	if(isset($_GET['title'])){
       $title=$_GET['title'];
    
	}
    $response=controller::FlowerOne($title);
}
else{
	$response=controller::error404();
}