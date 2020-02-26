<?php
ob_start();
?>

<link rel="stylesheet" href="style.css" type="text/css" />

<h2>Проект- "Редкие цветы"</h2>
<article>
	<p class="pros">
		Просмотр списка цветов и краткое описание.
	</p>

</article>

<?php $content = ob_get_clean(); ?>

<?php include "view/templates/layout.php";