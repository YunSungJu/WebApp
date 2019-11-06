<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Music Library</title>
		<meta charset="utf-8" />
		<link href="https://selab.hanyang.ac.kr/courses/cse326/2019/labs/images/5/music.jpg" type="image/jpeg" rel="shortcut icon" />
		<link href="https://selab.hanyang.ac.kr/courses/cse326/2019/labs/labResources/music.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<h1>My Music Page</h1>
		
		<!-- Ex 1: Number of Songs (Variables) -->
		<?php
			$song_count = 5678;
		?>
		
		<p>
			I love music.
			I have <?= $song_count ?> total songs,
			which is over <?= (int) ($song_count / 10) ?> hours of music!
		</p>

		<!-- Ex 2: Top Music News (Loops) -->
		<!-- Ex 3: Query Variable -->
		<div class="section">
			<h2>Billboard News</h2>
		
			<ol>
				<?php 
					$news_pages = $_GET["news_pages"]; 
					if (!isset($_GET["news_pages"])) {
				?>
			    	<li><a href="https://www.billboard.com/archive/article/201911">2019-11</a></li>
					<li><a href="https://www.billboard.com/archive/article/201910">2019-10</a></li>
					<li><a href="https://www.billboard.com/archive/article/201909">2019-09</a></li>
					<li><a href="https://www.billboard.com/archive/article/201908">2019-08</a></li>
					<li><a href="https://www.billboard.com/archive/article/201907">2019-07</a></li>
				<?php } else { 
					for($i=0; $i<$news_pages; $i++){ ?>
						<li><a href="https://www.billboard.com/archive/article/<?=201911-$i?>">2019-<?=11-$i?></a></li>
				<?php
					}
				} 
				?>
			</ol>
		</div>

		<!-- Ex 4: Favorite Artists (Arrays) -->
		<!-- Ex 5: Favorite Artists from a File (Files) -->
		<?php
			$artists = array()
		?>
		<div class="section">
			<h2>My Favorite Artists</h2>
		
			<ol>
				<?php 
					foreach (file("favorite.txt") as $name){
						?>
						<li><?= $name ?></li>
				<?php
					}
					for($i=0; $i<count($artists);$i++){
				?>
						<li><?= $artists[$i] ?></li>
				<?php
					}
				?>
			</ol>
		</div>
		
		<!-- Ex 6: Music (Multiple Files) -->
		<!-- Ex 7: MP3 Formatting -->
		<div class="section">
			<h2>My Music and Playlists</h2>

			<ul id="musiclist">
				
				<?php 
					$list = glob("lab5/musicPHP/songs/*.mp3");
					for ($i=0; $i<count($list); $i++){
						$list_with_size[$list[$i]] = filesize($list[$i]);
						arsort($list_with_size);
					}

					foreach ($list_with_size as $key => $value) {
				?>
						<li class="mp3item">
						<a href="<?=$list[$i]?>"><?=basename($key)?></a> (<?=(int)($value/1024)?> KB)
						</li>
				<?php
						}
				?>


				<!-- Exercise 8: Playlists (Files) -->
				<?php 
					$list = glob("lab5/musicPHP/songs/*.m3u");
					rsort($list);
					for ($i=0; $i<count($list); $i++){
				?>
					<li class="playlistitem"><?=basename($list[$i])?>:
						<ul>
						<?php
							$text = file($list[$i]);
							shuffle($text);
							for ($j=0; $j<count($text); $j++){
								if (strpos($text[$j],"#") === false){
						?>
									<li><?=$text[$j]?></li>
						<?php
								}
							}
						?>
						</ul>
				<?php
					}
				?>		
			</ul>
		</div>

		<div>
			<a href="https://validator.w3.org/check/referer">
				<img src="https://selab.hanyang.ac.kr/courses/cse326/2019/labs/images/w3c-html.png" alt="Valid HTML5" />
			</a>
			<a href="https://jigsaw.w3.org/css-validator/check/referer">
				<img src="https://selab.hanyang.ac.kr/courses/cse326/2019/labs/images/w3c-css.png" alt="Valid CSS" />
			</a>
		</div>
	</body>
</html>
