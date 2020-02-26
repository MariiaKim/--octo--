<?php
ob_start();
echo '<article class="okno">';
echo '<h3>'.$flower['flowername'].'</h3>';
echo '<img class="flor" src="public/images/'.$flower['image'].'">';
echo '<p class="obzac">Где растут:'.$flower['where it grows'].'</p>';

echo '<p class="obza">Описание: '.$flower['description'].'</p>';

echo '<p style= "padding-top:10px;">';
echo '<a href="flowers" role="button">Back &raquo;</a>';
echo '</p>';
echo  '</article>';

echo  '<div style="clear:both;"></div>';
$content= ob_get_clean();
include 'view/templates/layout.php';
?>

<link rel="stylesheet" href="style.css" type="text/css" />

