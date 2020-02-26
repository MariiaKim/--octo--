<?php ob_start() ?>
<h2>ошибка 404</h2>
<article>
	<p>
		По запрашиваему URL страница не найдена
	</p>
</article>

<?php $content = ob_get_clean(); ?>

<?php include "view/templates/layout.php";