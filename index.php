<!DOCTYPE html>
<html lang="en">
<head>
	<title>Административный доступ</title>
	
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link rel='stylesheet' href="stylesheets/font-awesome.min.css">
	<link rel="stylesheet" href="stylesheets/reset.css">

	<link rel="stylesheet" href="stylesheets/style.css">

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</head>
<body>
	<header>
		<div class="header_top">
			<div class="menu_header_left uni_display">
				<button id="js_link_menu" type="button" class="btn btn_navbar uni_display js_btn_click">
						<span class="icon-bar">
						</span>
						<span class="icon-bar">
						</span>
						<span class="icon-bar">
						</span>
				</button>
				<div class="logotype uni_display">
					<a href="#">
						company name
					</a>
				</div>
			</div>
			<div class="menu_header_rigth uni_display">
				<div class="uni_display">
					<a href="http://www.web.com" class="icon_button">
						<i class="fa fa-external-link"></i>
						Перейти на www.web.com
					</a>
				</div>
				<div class="btn_header_admin uni_display">
					<button id="js_btn_dropdown" type="button" class="btn admin_header_btn js_dropdown_toggle" data-toggle="dropdown" aria-expanded="false">
						<i class="fa fa-user icon_btn"></i>
						<span class="desc_btn">
							Привет, admin_name
						</span>
						<i class="fa fa-caret-down icon_btn"></i>
					</button>
					<ul id="js_dropdown_block" class="dropdown-menu">
						<li>
							<form method="post" action="#" class="form_logout">
								<i class="fa fa-sign-out"></i>
								<input class="btn btn-exit" type="submit" value="Выйти">
							</form>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</header>
	<main>
		<div id="js_div_menu" class="navbar_menu js_div_menu">
        	<ul class="navigation nav_bar">
          		<li class="active">
            		<a href="#">
						<img src="image/Exterior-100_sm.png" alt="main_icon" class="img_nav">
						главная
					</a>
          		</li>
          		<li>
            		<a href="#">
						<img src="image/Shopping-Cart-100_sm.png" alt="add_product" class="img_nav">
						добавить товар
					</a>
          		</li>
          		<li>
            		<a href="#">
						<img src="image/Megaphone-100_sm.png" alt="add_article" class="img_nav">
						добавить новость
					</a>
          		</li>
          		<li>
            		<a href="#">
						<img src="image/Open-Folder-100_sm.png" alt="subcategory" class="img_nav">
						подкатегории
					</a>
          		</li>
          		<li>
            		<a href="#">
						<img src="image/Dossier-100_sm.png" alt="directory" class="img_nav">
						каталог
					</a>
          		</li>
          		<li>
            		<a href="#">
						<img src="image/View-Details-100_sm.png" alt="article_list" class="img_nav">
						список новостей
					</a>
          		</li>
          		<li>
            		<a href="#">
						<img src="image/Conference-100_sm.png" alt="manufacturers" class="img_nav">
						производители
					</a>
          		</li>
        	</ul>
      	</div>
		<div class="container_main">
			<h1 class="admin_title_main">
				Выберите страницу или категорию
			</h1>
			<div class="blocks">
				<div class="block_content uni_display">
					<img src="image/Shopping-Cart-100.png" alt="add_product" class="img_content">
					<p class="block_description">
						Добавить товар
					</p>
					<a href="#" class="btn_block">
						Перейти
					</a>
				</div>
				<div class="block_content uni_display">
					<img src="image/Megaphone-100.png" alt="add_article" class="img_content">
					<p class="block_description">
						Добавить новость
					</p>
					<a href="#" class="btn_block">
						Перейти
					</a>
				</div>
				<div class="block_content uni_display">
					<img src="image/Open Folder-100.png" alt="subcategory" class="img_content">
					<p class="block_description">
						Подкатегории
					</p>
					<a href="#" class="btn_block">
						Перейти
					</a>
				</div>
				<div class="block_content uni_display">
					<img src="image/Dossier-100.png" alt="catalog" class="img_content">
					<p class="block_description">
						Каталог
					</p>
					<a href="#" class="btn_block">
						Перейти
					</a>
				</div>		
			</div>
			<h1 class="admin_title_main">
				 Дополнительная поддержка
			</h1>
			<div class="blocks_support">
				<div class="block_content_support uni_display">
					<img src="image/circle_doc.png" alt="doc" class="img_circle">
					<a href="#" class="btn_block_support">
						Загрузить
					</a>
					<p class="description_support">
						Загрузить инструкцию по использованию данной админ панели
					</p>
				</div> 
				<div class="block_content_support uni_display">
					<img src="image/circle_man.png" alt="man" class="img_circle">
					<a href="#" class="btn_block_support pad_btn">
						Связаться с нами
					</a>
					<p class="description_support">
						Описание действия, которое необходимо выполнить
					</p>
				</div>
				<div class="block_content_support uni_display">
					<img src="image/circle.png" alt="circle" class="img_circle">
					<a href="#" class="btn_block_support">
						Действие
					</a>
					<p class="description_support">
						Текст описывающий действие, которое необходимо выполнить
					</p>
				</div>	
			</div>
			<a id="scroller" href="#top" style="position: fixed; z-index: 2147483647; display: block;">
				<i class="fa fa-chevron-up fa-lg"></i>
			</a>			
		</div>
	</main>
	<footer>
		<div class="footer_copy">
			<p class="admin_copy_footer">
				made by
				<a href="http://www.dev.bzzz.biz.ua" target="_blank">
					<img src="image/bzzz.png" alt="bzzz-copy">
				</a>
			</p>
		</div>
	</footer>
</body>
</html>