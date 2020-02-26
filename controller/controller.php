<?php
class controller{
	public function StartSite(){
		include 'view/main.php';


}
public function FlowerList(){
	$flowerList = Model ::getFlowerList();
	include 'view/flowerList.php';
}


public function flowerOne($title){
	$test=Model::getFlower($title);
	if($test[0]==true){
		$flower=$test[1];
		include 'view/flowerOne.php';
	}else{
		include 'view/error404.php';
	}
}
public function error404(){
	include 'view/error404.php';
   }
}