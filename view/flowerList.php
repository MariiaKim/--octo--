<?php

ob_start();
?>
<h2>Редкие цветы</h2>
<?php
foreach ($flowerList as $flowerOne){
	echo '<article class="okno2">';
	echo '<h3>';
	echo '<a href="flower?title='.$flowerOne['flowername'].'">'.$flowerOne['flowername'].'</a>';
	echo '</h3>';
	echo '<img class="flir" src="public/images/'.$flowerOne['image'].'">';
	echo '<p>Растет: '.$flowerOne['where it grows'].'</p>';
	echo '<p style= "padding-top:10px;">';
	echo '<a href="flower?title='.$flowerOne['flowername'].'"role="button"> Описание &raquo; </a>';
	echo '</p>';
	echo  '</article>';
	echo  '<div style="clear:both;"></div>';

}
?>

<?php
$content= ob_get_clean();
include 'view/templates/layout.php';
?>


<link rel="stylesheet" href="style.css" type="text/css" />
