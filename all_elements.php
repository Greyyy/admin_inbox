<!DOCTYPE html>
<html lang="en">
<head>
	<title>Административный доступ</title>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link rel='stylesheet' href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/reset.css">

	<link rel="stylesheet" href="css/style.css">

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/scrollUp.js"></script>
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
					<a href="index.php">
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
				Элементы и их состояния
			</h1>
			<div class="blocks_elements">
				<div class="block_inputs">
					<h2 class="title_block_desc">
						Inputs
					</h2>
					<input type="text" class="input_element un_active uni_display" placeholder="Un-Active">
					<input type="text" class="input_element active uni_display" placeholder="Active">
					<input type="text" class="input_element alert uni_display" placeholder="Alert">
					<input type="text" class="input_element disabled uni_display" placeholder="Disabled">
				</div>
				<div class="block_sliders">
					<div class="progressbars_sliders uni_display">
						<h2 class="title_block_desc">
							Progressbars and Sliders
						</h2>
						<progress max="100" value="100" class="progress_bar"></progress>
						<progress max="100" value="80" class="progress_bar long"></progress>
						<input class="range_slider" type="range" min="100" max="500" step="10" />
					</div>
					<div class="navigation uni_display">
						<h2 class="title_block_desc">
							Navigation
						</h2>
						<nav class="nav_icons uni_display">
							<ul>
								<li class="first_element">
									<a href="#">
										<i class="fa fa-align-justify"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-list"></i>
									</a>
								</li>
								<li class="active_nav">
									<a href="#">
										<img src="image/icon_list.png" alt="icon">
									</a>
								</li>
								<li class="last_element">
									<a href="#">
										<i class="fa fa-th"></i>
									</a>
								</li>
							</ul>
						</nav>
						<nav class="nav_selectors uni_display">
							<ul>
								<li class="first_element">
									<a href="#">
										<i class="fa fa-caret-left"></i>
									</a>
								</li>
								<li class="r_border">
									<a href="#">
										All messages
									</a>
								</li>
								<li class="last_element">
									<a href="#">
										<i class="fa fa-caret-right"></i>
									</a>
								</li>
							</ul>
						</nav>
						<div class="pagination">
							<ul class="pagination_list">
								<li class="first_el_pag">
									<a href="#">
										<i class="fa fa-caret-left"></i>
									</a>
								</li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li class="last_el_pag">
									<a href="#">
										<i class="fa fa-caret-right"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="che_radio_too_blocks">
					<div class="checkbox_radio_block uni_display">
						<h2 class="title_block_desc">
							Checkboxes
						</h2>
						<div class="checkboxes_radio_desc">
							<p class="check_radio_icons">
								<i class="fa fa-square icon_marg"></i>
								Uncecked Item
							</p>
							<p class="check_radio_icons">
								<i class="fa fa-check-square icon_marg"></i>
								Item on Hover
							</p>
							<p class="check_radio_icons">
								<i class="fa fa-check-square icon_marg bg_checked"></i>
								Checked
							</p>
							<p class="check_radio_icons">
								<i class="fa fa-square icon_marg"></i>
								Unchecked Item
							</p>
							<p class="check_radio_icons">
								<i class="fa fa-square icon_marg"></i>
								Disabled Item
							</p>
						</div>						
					</div>
					<div class="checkbox_radio_block uni_display">
						<h2 class="title_block_desc">
							Radiobuttons
						</h2>
						<div class="checkboxes_radio_desc">
							<p class="check_radio_icons">
								<i class="fa fa-circle-o  icon_marg"></i>
								Static Item
							</p>
							<p class="check_radio_icons">
								<i class="fa fa-dot-circle-o icon_marg"></i>
								Item on Hover
							</p>
							<p class="check_radio_icons">
								<i class="fa fa-dot-circle-o icon_marg bg_checked"></i>
								Checked
							</p>
							<p class="check_radio_icons">
								<i class="fa fa-circle-o  icon_marg"></i>
								Static Item
							</p>
							<p class="check_radio_icons">
								<i class="fa fa-circle-o  icon_marg"></i>
								Disabled Item
							</p>
						</div>						
					</div>
					<div class="toogles_block uni_display">
						<h2 class="title_block_desc">
							Toggles
						</h2>
						<div class="toggles_desc">
							<div class="toggles_oval block_marg_r uni_display">
								<p class="togg_on">
									ON
									<i class="fa fa-circle toggles_circle"></i>
								</p>
							</div>
							<div class="toggles_oval_off uni_display">
								<p class="togg_off">
									<i class="fa fa-circle toggles_circle_off"></i>
									OFF
								</p>
							</div>
						</div>
						<div class="toggles_desc">
							<div class="toggles_square block_marg_r uni_display">
								<p class="togg_square_on">
									<i class="fa fa-check toggles_square_icon uni_display"></i>
									<i class="fa fa-square togg_square_icon uni_display"></i>
								</p>
							</div>
							<div class="toggles_square uni_display">
								<p class="togg_square_on">
									<i class="fa fa-square togg_square_icon"></i>
									<i class="fa fa-times toggles_square_icon"></i>
								</p>
							</div>
						</div>						
					</div>
				</div>
				<div class="tooltip_box_h">
					<div class="tool_box_head_block uni_display">
						<h2 class="title_block_desc">
							Tooltips
						</h2>
						<div class="tooltip_sm">
							Tooltip under the text
						</div>
						<div class="tooltip_big">
							Here is the smple of talltooltip that contains three lines or more.
							<p>
								More.
							</p> 
						</div>
					</div>
					<div class="tool_box_head_block uni_display">
						<h2 class="title_block_desc">
							Text Box
						</h2>
						<div class="text_box">
							<p class="text_desc">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida a felis a lacinia. Pelentesque vei imperdiet urna. Vestibulum a ipsum ultrices, hendrerit esta, porta purus. Morbi sed faucibus dolor. 
								<a href="#" class="ancor">
									visual marker.
								</a>
							</p>
							<p>
								Maecenas gravida a felis a lacinia. Pellentesque vel imperdiet urna. Vestibulum a ipsum ultrices, henderit est a, porta purus.	
							</p>
						</div>
					</div>
					<div class="tool_box_head_block uni_display">
						<h2 class="title_block_desc">
							Headers
						</h2>
						<div class="headers_block">
							<h1 class="header_desc h1">
								Header 1
							</h1>
							<h2 class="header_desc h2">
								Header 2
							</h2>
							<h3 class="header_desc h3">
								Header 3
							</h3>
							<h4 class="header_desc h4">
								Header 4
							</h4>
							<h5 class="header_desc h5">
								Header 5
							</h5>
						</div>
					</div>
				</div>
				<div class="btn_group">
					<h2 class="title_block_desc">
						Buttons
					</h2>
					<div class="btn_block">
						<button class="btn_warm">
							Warm Button
						</button>
						<button class="btn_warm btn_hover">
							Warm Button
						</button>
						<button class="btn_warm btn_active">
							Warm Button
						</button>
					</div>
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