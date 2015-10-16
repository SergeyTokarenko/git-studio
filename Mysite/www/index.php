<!DOCTYPE html>
<html>
<head>
    <?php 
    $title = "BBS NEWS";
    require_once "blocks/head.php";
    $news = getNews(3);
    ?>
</head>
<body>
    <?php require_once "blocks/header.php" ?> <!--Поключили header.php-->	
	<div id="wrapper">
    
	    <div id="leftCol">
			<?php
				for ($i=0; $i < count($news); $i++) {
					if ($i == 0) {
						echo "<div id=\"bigArticle\">";
					}
					else {
						echo "<div class=\"article\">"; 
					}
					echo '<h2>'.$news[$i]["title"].'</h2>
	           <img src="img/'.$news[$i]["id"].'.jpg" alt="Статья '.$news[$i]["id"].' " title="Статья '.$news[$i]["id"].'">
	           <p>'.$news[$i]["intro_text"].'</p>
	          <a href="/article.php">
	           <div class="input_min">Далее</div>
	           </a> 
	       </div>';
	       		if ($i == 0) {
	       			echo "<div class=\"clear\"><br></div>";
	       		}
			}
			?>
	    </div>
	    <?php require_once "blocks/rightCol.php" ?>
	</div>
	

	<?php require_once "blocks/footer.php" ?>
</body>
</html>