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
	<link rel="stylesheet" type="text/css" href="mainstyle.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<style>
		body{
			background-image: url("bg.jpg");
			margin: 0;
		}
		#div_inform{
			background-color: #3399ff;
			color: white;
			text-align: center;
			font-weight: bold;
			font-size: 20px;
			padding: 10px;
		}
		#div_page_header{
			padding: 0 200px;
			margin: 15px 0;
		}
		#div_logo{
			float: left;
		}
		#div_toolbar{
			margin-left: 570px;
			border-radius: 10px;
			background-color: white; 
			width: 380px;
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
		#div_timeline_2{
			padding: 20px;
			background-color: #b3daff;
			border-radius: 10px;
			margin-left: 650px;
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
				<input type="text" size="95"> <br />
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
				<div id="div_timeline_post" style="border-radius: 10px; margin-top: 10px; padding: 10px; background-color: white; width: 580px;">
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
		<div id="div_timeline_2">
			asdasda <br />
			asdasda <br />
			asdasda <br />
			asdasda <br />
			asdasda <br />
			asdasda <br />
			asdasda <br />
			asdasda <br />
			asdasda <br />
			asdasda <br />
			asdasda <br />
			asdasda <br />

			asdasda <br />
			asdasda <br />
			asdasda <br />
			asdasda <br />
			asdasda <br />
			asdasda <br />
			asdasda <br />
			asdasda <br />
			asdasda <br />
			asdasda <br />
			asdasda <br />
			asdasda <br />
			asdasda <br />

			asdasda <br />
			asdasda <br />
			asdasda <br />
			asdasda <br />
			asdasda <br />
			asdasda <br />
			asdasda <br />
			asdasda <br />
			asdasda <br />
			asdasda <br />
			asdasda <br />
			asdasda <br />
			asdasda <br />

			asdasda <br />
		</div>
	</div>
</body>
</html>