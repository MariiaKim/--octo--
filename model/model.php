<?php
class Model{
     public function getFlowerList(){
     	include_once 'model/flowersArray.php';
     	return $flowers;
     }


     public function getFlower($title){
     	$allFlower=Model::getFlowerList();
     	$i=0;
     	$test=array(false);
     	foreach ($allFlower as $oneFlower){
     		if($oneFlower['flowername']==$title){
     			$test=array(true,$allFlower[$i]);
     			return $test;

     		}
     	       $i++;
     	}
     	
     	return $test;
     }


}//class