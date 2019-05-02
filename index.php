<?php $title = "Почетна"; ?>
<?php include 'inc/parts/head.php'; ?>
	<body>
		<header id="header">
			<?php include 'inc/header_top.php';?>
			<?php include 'inc/navigation.php'; ?>
			<div class="front">
				<a href="index.php" class="logo">
				<img src="resources/images/logo.png" alt="Logo Ekonomske skole">
				</a>
				<h1>Нада Димић 
					<span class="heading-extension">Економска школа</span>
					<span class="heading-line">Земун</span>
					<span class="heading-date">1883</span>
				</h1> 
			</div> <!-- end .front -->
			<div class="date">
				<?php 
					$date = date('d. M Y.');
					echo $date; 
				?>
			</div> <!-- end .date -->
		</header>
		<section class="section-announcments">
			<div class="row">
                <h2>Обавештења и догађаји</h2>
            </div><!-- end .row -->
			<div class="row js--wp-1">
				<div class="col span-1-of-3">
					<article class="news-box">
						<h3>Обавештење</h3>
						<i class="ion-ios-mic-outline icon-big"></i>
						<p>Од 1. јануара 2018. године наша школа је добила нову, 
						званичну интернет презентацију. Сада на једном месту можете сазнати 
						све што вас интересује о упису, ђацима, нашим успесима...</p>
						<a href="obavestenja.php" class="btn btn-full btn-size">Више&nbsp;&raquo;</a>
					</article>
                </div>
				<div class="col span-1-of-3">
					<article class="news-box">
						<h3>Догађај</h3>
						<i class="ion-ios-flag-outline icon-big"></i>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Nullam ullamcorper feugiat lacus porta vulputate. Vestibulum 
						tincidunt sem eu faucibus tempus. Duis finibus 
						venenatis neque, nec interdum metus elementum at.. </p>
						<a href="dogadjaji.php" class="btn btn-full btn-size">Више&nbsp;&raquo;</a>
					</article> <!-- end #news -->
                </div>
				<div class="col span-1-of-3">
					<article class="news-box">
						<h3>Распоред часова</h3>
						<i class="ion-ios-list-outline icon-big"></i>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Nullam ullamcorper feugiat lacus porta vulputate. Vestibulum 
						tincidunt sem eu faucibus tempus. Duis finibus 
						venenatis neque, nec interdum metus elementum at.. </p> 
						<a href="raspored" class="btn btn-full btn-size">Више&nbsp;&raquo;</a>
					</article> <!-- end #news -->
				</div>
            </div><!-- end .row -->
		</section>
		<section class="section-about">
			<div class="row">
				<article class="school-history js--wp-2">	
					<h3>Наша школа</h3>
					<p>Економска школа „Нада Димић" у Земуну ове године бележи 135 годинa 
							од свог настанка. Основана 1883. године као дворазредна Трговачка 
							школа у оквиру седморазредне Земунске Гимназије. Земун je тада припадао 
							Аустро-Угарској Монархији, у административној надлежности Земаљске 
							владе у Загребу. Било je то време привредног успона Земуна, 
							првенствено због положаја пограничног града између Монархије 
							и Краљевине Србије, те самим тим и потребе за школованим 
							кадровима у области трговине.  </p> 
					<a href="skola.php" class="btn btn-full btn-size">Више&nbsp;&raquo;</a>
				</article>
			</div><!-- end .row -->	
		</section>
		
		<section class="section-success">
			<div class="row box">
                <h2>Наши успеси</h2>
                 <p class="long-copy">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Nullam ullamcorper feugiat lacus porta vulputate. Vestibulum 
                    tincidunt sem eu faucibus tempus. Duis finibus 
                    venenatis neque, nec interdum metus elementum at..
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Nullam ullamcorper feugiat lacus porta vulputate. Vestibulum 
                    tincidunt sem eu faucibus tempus. Duis finibus 
                    venenatis neque, nec interdum metus elementum at.</p> 
                 <a href="uspesi.php" class="btn btn-full btn-size">Више&nbsp;&raquo;</a> 
			 </div> <!-- .row -->  
		</section>
		
<!--		<section class="section-bell js--section-bell" id="bell">
			<div class="row">
				<h2>Распоред звоњења</h2>
			</div>
			<div class="row js--wp-4">
				<table class="bell-table">
					<tr>
						<td>час</td>
						<th>ПРЕ ПОДНЕ</th>
						<th>ПОСЛЕ ПОДНЕ</th>
					</tr>
					<tr>
						<td>1</td>
						<td>07:45 – 08:30</td>
						<td>14:00 – 14:45</td>
					</tr>
					<tr>
						<td>2</td>
						<td>08:35 – 09:20</td>
						<td>14:50 – 15:35</td>
					</tr>
					<tr>
						<td>3</td>
						<td>09:35 – 10:20</td>
						<td>15:50 – 16:35</td>
					</tr>
					<tr>
						<td>4</td>
						<td>10:25 – 11:10</td>
						<td>16:40 – 17:25</td>
					</tr>
					<tr>
						<td>5</td>
						<td>11:25 – 12:10</td>
						<td>17:40 – 18:25</td>
					</tr>
					<tr>
						<td>6</td>
						<td>12:15 – 13:00</td>
						<td>18:30 – 19:05</td>
					</tr>
					<tr>
						<td>7</td>
						<td>13:05 – 13:50</td>
						<td>19:20 – 20:05</td>
					</tr>
				</table>
			</div>  end .row
		</section>-->
		
<!--		<section class="section-video">
			<div class="row js--wp-3">
            	<iframe class="school-video" src="https://www.youtube.com/embed/dU9E-HMTCG8?controls=0">
            	</iframe>
			</div>  end .row
		</section>-->
		
<?php include 'inc/footer.php'; ?>