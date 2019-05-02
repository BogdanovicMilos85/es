<footer>
			<div class="row">
				<div class="footer-info">
					<a href="index.php">
						<img src="resources/images/logo.png" alt="Logo skole">
					</a>
					<p>Економска школа "Нада Димић"</p>
					<p>22. Октобра 19, 11080 Земун</p>
					<p>Тел/Факс 011/2190-386</p>
				</div> <!-- end .footer-info -->
            </div> <!-- end .row -->
			<div class="row">
                <p class="footer-paragraph">Сва права задржана - &copy; <span class="copyright">Економска школа "Нада Димић" Земун</span></p>
                <p>Сајт креирали:</p>
				<p><a class="web" href="http://www.milosbogdanovic.com" target="_blank">Милош Богдановић</a></p>
				<p><a class="web" href="http://www.miroslavristic.com" target="_blank">Мирослав Ристић</a></p>
            </div> <!-- end .row -->
		</footer>
		
		<a href="#header" id="topLink"><i class="ion-ios-arrow-up"></i></a>

		<?php

			include 'parts/loading_scripts.php';

			if($title = 'Галерија') {
				galleryScripts();
			} elseif($title = 'Путовања') {
				galleryScripts();
			} elseif($title = 'Сајам образовања') {
				galleryScripts();
			} elseif($title = 'Школске слике') {
				galleryScripts();
			} else {
				pageScripts();
			}
		?>
	</body>
</html>