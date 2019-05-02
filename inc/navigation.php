<nav class="nav clearfix">
	<div class="row">
		<ul class="main-nav">
			<li><a href="#">О Школи</a>
				<ul>
					<li><a href="#">Историјат школе</a></li>
					<li><a href="#">Задаци и циљеви</a></li>
					<li><a href="#">Наставници</a></li>
					<li><a href="#">Ученички парламент</a></li>
					<li><a href="#">Школски одбор</a></li>
					<li><a href="#">Школа данас</a></li>
				</ul>
			</li>
			<li><a href="#">Образовни профили</a></li>
			<li><a href="#">Настава и родитељи</a></li>
			<li><a href="#">Ученичка страна</a>
				<ul>
					<li><a href="#">Секције</a></li>
					<li><a href="#">Такмиченја</a></li>
					<li><a href="#">Ученик генерарије</a></li>
					<li><a href="#">Упис</a></li>
				</ul>
			</li>
			<li><a href="#">Ванредни ученици</a></li>
			<li><a href="#">Управа-рачуноводство</a></li>
			<li><a href="#">Документа школе</a></li>
			<li><a href="gallery.php">Галерија</a>
				<ul>
					<li><a href="trips.php">Путовања</a></li>
					<li><a href="fair.php">Сајам образовања</a></li>
					<li><a href="school.php">Школа</a></li>
				</ul>
			</li>
			<li><a href="contact.php">Контакт</a></li>
	    </ul>
	</div> <!-- end .row -->
				<span onclick="openNav()" class="sidenav-icon"><i class="ion-navicon-round"></i></span>
				<div id="mySidenav" class="sidenav">
					<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
					<a href="#">О Школи</a>
					<a href="#">Историјат школе</a>
					<a href="#">Задаци и циљеви</a>
					<a href="#">Наставници</a>
					<a href="#">Ученички парламент</a>
					<a href="#">Школски одбор</a>
					<a href="#">Школа данас</a>
					<a href="#">Образовни профили</a>
					<a href="#">Настава и родитељи</a>
					<a href="#">Ученичка страна</a>
					<a href="#">Секције</a>
					<a href="#">Такмиченја</a>
					<a href="#">Ученик генерарије</a>
					<a href="#">Упис</a>
					<a href="#">Ванредни ученици</a>
					<a href="#">Управа-рачуноводство</a>
					<a href="#">Документа школе</a>
					<a href="#">Галерија</a>
					<a href="contact.php">Контакт</a>
				</div> <!-- end .sidenav -->
				<?php 
					if($title !== 'Почетна') {
						include 'parts/nav_logo.php';
					}
				?>
</nav>