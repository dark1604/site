<?php require_once("res/x5engine.php"); ?>
<!DOCTYPE html><!-- HTML5 -->
<html prefix="og: http://ogp.me/ns#" lang="ua-UA" dir="ltr">
	<head>
		<title>Поиск - Е-31</title>
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv="ImageToolbar" content="False" /><![endif]-->
		<meta name="author" content="Вода Назар" />
		<meta name="generator" content="Incomedia WebSite X5 Professional 13.0.2.19 - www.websitex5.com" />
		<meta property="og:locale" content="ua" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="https://epicentrk.ua/shop/elektronika/imsearch.php" />
		<meta property="og:title" content="Поиск" />
		<meta property="og:site_name" content="Е-31" />
		<meta name="viewport" content="width=960" />
		
		<link rel="stylesheet" type="text/css" href="style/reset.css?13-0-2-19" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/print.css?13-0-2-19" media="print" />
		<link rel="stylesheet" type="text/css" href="style/style.css?13-0-2-19" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/template.css?13-0-2-19" media="screen" />
		<link rel="stylesheet" type="text/css" href="style/menu.css?13-0-2-19" media="screen" />
		<link rel="stylesheet" type="text/css" href="pcss/imsearch.css?13-0-2-19-638042123117339898" media="screen" />
		<script type="text/javascript" src="res/jquery.js?13-0-2-19"></script>
		<script type="text/javascript" src="res/x5engine.js?13-0-2-19" data-files-version="13-0-2-19"></script>
		<script type="text/javascript">
			window.onload = function(){ checkBrowserCompatibility('Ваш браузер не підтримує функції, необхідні для візуалізації цього сайту.','Ваш браузер не підтримує функції, необхідні для візуалізації цього сайту.','[1]Оновіть Ваш браузер[/1] або [2]продовжите процедуру [/2].','http://outdatedbrowser.com/'); };
		</script>
		<link rel="icon" href="favicon.png?13-0-2-19-638042123117339898" type="image/png" />
	</head>
	<body>
		<div id="imHeaderBg"></div>
		<div id="imFooterBg"></div>
		<div id="imPage">
			<div id="imHeader">
				<h1 class="imHidden">Поиск - Е-31</h1>
				<div id="imHeaderObjects"></div>
			</div>
			<a class="imHidden" href="#imGoToCont" title="Заголовок головного меню">Перейти до контакту</a>
			<a id="imGoToMenu"></a><p class="imHidden">Головне меню:</p>
			<div id="imMnMnContainer">
				<div id="imMnMnGraphics"></div>
				<div id="imMnMn" class="auto main-menu">
					<div class="hamburger-menu-background-container"><div class="hamburger-menu-background menu-mobile-hidden"><div class="hamburger-menu-close-button"><span>&times;</span></div></div></div>
				<ul class="auto menu-mobile-hidden">
					<li id="imMnMnNode0" class=" imPage">
						<a href="index.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Главная</span></span>
							</span>
						</a>
					</li><li id="imMnMnNode3" class=" imPage">
						<a href="---------1.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Страница 1</span></span>
							</span>
						</a>
					</li></ul>
				</div>
			</div>
			<div id="imContentContainer">
				<div id="imContentGraphics"></div>
				<div id="imContent">
					<a id="imGoToCont"></a>
				<div id="imSearchPage">
				<h2 id="imPgTitle">Результати пошуку</h2>
				<?php
				$search = new imSearch();
				$keys = isset($_GET['search']) ? @htmlspecialchars($_GET['search']) : "";
				$page = isset($_GET['page']) ? @htmlspecialchars($_GET['page']) : 0;
				$type = isset($_GET['type']) ? @htmlspecialchars($_GET['type']) : "pages"; ?>
				<div class="searchPageContainer">
				<?php echo $search->search($keys, $page, $type); ?>
				</div>
				</div>
				
					<div class="imClear"></div>
				</div>
			</div>
			<div id="imFooter">
				<div id="imFooterObjects"></div>
			</div>
		</div>
		<span class="imHidden"><a href="#imGoToCont" title="Прочитати цю сторінку знову">Назад до змісту</a> | <a href="#imGoToMenu" title="Прочитати цей час знову">Назад до головного меню</a></span>
		
		<noscript class="imNoScript"><div class="alert alert-red">Щоб використовувати цей сайт, необхідно включити JavaScript</div></noscript>
	</body>
</html>
