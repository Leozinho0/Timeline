<?php
$arr_posts = json_decode(file_get_contents("http://vagalumewifi.com.br/timeline.json"));
//print_r($arr_posts);
//ucfirst -- PHP Primeira letra maiúscula
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Timeline - Home</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<style>
		body{
			background-image: url("bg.jpg");
			background-color: #cce6ff;
			margin: 0;
		}
		#div_inform{
			background-color: #3399ff;
			color: white;
			text-align: center;
			font-weight: bold;
			font-size: 20px;
			padding: 10px;
			white-space: nowrap;
		}
		#div_page_header{
			padding: 0 200px;
			margin: 15px 0;
		}
		#div_logo{
			float: left;
		}
		#div_toolbar{
			margin-left: 460px;
			border-radius: 10px;
			background-color: white; 
			width: 490px;
		}
		#div_toolbar ul{
			padding: 10px 5px;
		}
		#div_toolbar ul li{
			color: #0073e6;
			padding: 6px;
			display: inline;
		}
		#div_timeline{
			margin: 0 200px;
			width: 950px;
			border-radius: 10px;
		}
		#div_timeline_1{
			padding: 20px;
			width: 600px;
			float: left;
			background-color: white;
			border-radius: 10px;
		}
		#div_rightmenu{
			margin-left: 650px;
		}
		.div_rightmenu{
			border-radius: 10px;
			padding: 20px;
			background-color: #b3daff;
			margin-bottom: 10px;

		}
		#div_rightmenu_search{
			text-align: center;
			font-size: 15px;
		}
		#div_timeline_tweet{
			text-align: right;
		}
		#div_timeline_tweet input{
			line-height: 4em;
			border-color: #0073e6;
			border-radius: 5px;
		}
		#div_new_tweets_alert{
			background-color: #b3daff;
			padding: 5px;
			margin: 20px 0;
		}
		#div_timeline_content{
			width: 620px;
		}
		a{
			text-decoration:none;
		}
		.li_posts li{
			display: inline;
			padding: 0 15px;
		}

	</style>
</head>
<body>
	<div id="div_inform">
		Welcome to the Twitter Timeline! We're so pleased to have you!
	</div>
	<div id="div_page_header">
		<div id="div_logo">
			<img src="https://yourhappinessblog.files.wordpress.com/2013/01/twitter-logo-name-bird.png" width="150" />
		</div>
		<div id="div_toolbar">
			<ul>
				<a href="">
					<li>Home</li>
					<li>Profile</li>
					<li>Find People</li>
					<li>Settings</li>
					<li>Help</li>
					<li>Sign Out</li>
				</a>
			</ul>
		</div>
	</div>
	<div id="div_timeline">
		<div id="div_timeline_1">
			<div id="div_timeline_tweet">
				<span style="font-size: 30px;"> What's hapenning? </span><br />
				<input type="text" size="60"> <br />
				<button id="button_tweet"> Tweet </button>
			</div>
			<div id="div_new_tweets_alert">
				3 new tweets.
			</div>
			<div id="div_timeline_content">
				<?php
				foreach($arr_posts as $post)
				{
				?>
				<div id="div_timeline_post" style="border-radius: 10px; margin-top: 10px; padding: 10px; background-color: white; width: 580px; border-bottom: 1px inset grey;">
					<div id="div_post_header" style="height: 60px;">
						<div style="float: left;"> 
							<img src="<?php echo $post->user->picture ?>" width="70" /> 
						</div>
						<div> 
							<span style="font-size: 20px; font-weight: bold; padding-left: 15px; color: blue;"> <?php echo ucfirst($post->user->username); ?> </span> <br /> 
							<span style="padding-left: 15px; font-size: 12px; color: grey;"> <?php echo $post->user->location ?> </span> 
						</div>
					</div>
					<div id="div_post_content" style="margin-top: 10px; border-radius: 15px; padding: 10px;">
						<div> <span> <?php echo $post->content ?> </span> </div>
						<ul class="li_posts">
							<li> <a href=""> <?php echo $post->likes ?> likes </a> </li>
							<li> <a href=""> <?php echo $post->user->friends ?> Friends </a> </li>
							<li> <?php echo $post->date ?> </li>
						</ul>
					</div>
				</div>
				<?php
				}
				?>
			</div>
		</div>
		<div id="div_rightmenu">
			<div class="div_rightmenu">
				<div style="float: left;">
					<img src="<?php echo $arr_posts[0]->user->picture ?>" width="60" />
				</div>
				<div style="margin-left: 70px;">
					<span style="font-size: 20px; font-weight: bold;"> Leandro Viana </span> <br>
					<span style="font-size: 15px;">1.254 tweets </span>
				</div>
				<div style="font-size: 11px; margin-top: 30px;">
					<table style="font-size: 14px;">
						<tr style="font-weight: bold;">
							<td>1254</td>
							<td>265</td>
							<td>689</td>
						</tr>
						<tr style="color: blue;">
							<td>tweets</td>
							<td>following</td>
							<td>followers</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="div_rightmenu" id="div_rightmenu_search">
				<input type="search" value="What do you want to search?" style="color: grey; text-align: center;"> <input type="submit" value="Search">
			</div>
			<div class="div_rightmenu">
				<div style="background-color: #b3ecff; text-align: center; padding: 5px; border-radius: 10px;">
					<span> Trending Topics! </span>
				</div>
				<br>
				<span style="color: blue;"> #NaoVaiTerGolpe </span> <br />
				<span style="color: blue;"> #ForaTemer </span> <br />
				<span style="color: blue;"> #StopCoupInBrazil </span> <br />
				<span style="color: blue;"> #DeathOfDemocracyBR </span> <br />
				<span style="color: blue;"> #ROTTR </span> <br />
				<span style="color: blue;"> #ffxv </span> <br />
				<span style="color: blue;"> #php </span> <br />
				<span style="color: blue;"> #javascript </span> <br />
				<span style="color: blue;"> #cplusplus </span> <br />
				<span style="color: blue;"> #HelloWorld </span> <br />
			</div>
		</div>
	</div>
</body>
</html>
