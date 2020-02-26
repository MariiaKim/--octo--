<html>
<head>
<link href="public/css/bootstrap.min.css" rel="stylesheet">
<link href="public/css/mystyle.css" rel="stylesheet">
</head>
<body>
    <div class="container">
      <div class="header clearfix">
	  <h2>Информационный сайт</h2>
        <h4 class="text-muted">
		
		<?php
     echo '<a href="./">Главная</a> ';
     echo '<a href="flowers">Цветы</a> ';
     if(!empty($flower['flowername'])) echo ' &#187 ' .$flower['flowername'];
     ?>
      </h4>
    </div>	  
   <div id="content">		
	
  <?php
  echo $content; ?>

	
      </div>
      <footer class="footer">
        <p>&copy;JKTVR19 2020 Design <i class="fa fa-child"></i></p>
      </footer>
    </div> <!-- container -->
</body>
</html>