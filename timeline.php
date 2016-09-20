<?php
$arr_posts = json_decode(file_get_contents("data.json"));
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
			background-color: #e6faff;
			margin: 0;
		}

	</style>
</head>
<body>
	<div id="div_page_header" style="background-color: #008fb3; padding: 20px; border-radius: 15px; margin: 10px;">
		<div style="float: left;">
			<img src="https://cdn3.iconfinder.com/data/icons/social-icons-5/607/Twitterbird.png" width="150" />		
		</div>
		<div>
			<img src="https://yourhappinessblog.files.wordpress.com/2013/01/twitter-logo-name-bird.png" width="500" />
		</div>
	</div>
	<div style="background-color: black; margin-top: 10px; padding: 10px;">
		Lalalala <br><br>
	</div>
	<div>
		<div id="div_leftfixedmenu" style="float: left; width: 400px; padding-left: 10px;">
			<?php
			foreach($arr_posts as $post)
			{
			?>
				<div id="div_post" style="border-radius: 10px; margin-top: 10px; padding: 10px;background-color: #008fb3;">
					<div id="div_post_header" style="height: 100px; color: #F8F8FF;">
						<div style="float: left;"> <img src="<?php echo $post->user->picture ?>" width="100" /> </div>
						<div> <span style="font-size: 50px; padding-left: 15px;"> <?php echo ucfirst($post->user->username); ?> </span> <br /> <span style="padding-left: 15px;"> <?php echo $post->user->location ?> </span> </div>
					</div>
					<div id="div_post_content" style="margin-top: 10px;background-color: #00b8e6; border-radius: 15px; padding: 10px;">
						<div> <span> <?php echo $post->content ?> </span> </div>
						<ul style="list-style: none; display: inline;">
							<li> <?php echo $post->likes ?> likes</li>
							<li> <?php echo $post->user->friends ?> Friends</li>
							<li> <?php echo $post->date ?> Date</li>
						</ul>
					</div>
				</div>
			<?php
			}
			?>
		</div>
		<div id="div_timeline" style="width: 930px; float: left; border-radius: 10px; padding: 0 10px;" >
			<?php
			foreach($arr_posts as $post)
			{
			?>
				<div id="div_post" style="border-radius: 10px; margin-top: 10px; padding: 10px;background-color: #008fb3;">
					<div id="div_post_header" style="height: 100px; color: #F8F8FF;">
						<div style="float: left;"> <img src="<?php echo $post->user->picture ?>" width="100" /> </div>
						<div> <span style="font-size: 50px; padding-left: 15px;"> <?php echo ucfirst($post->user->username); ?> </span> <br /> <span style="padding-left: 15px;"> <?php echo $post->user->location ?> </span> </div>
					</div>
					<div id="div_post_content" style="margin-top: 10px;background-color: #00b8e6; border-radius: 15px; padding: 10px;">
						<div> <span> <?php echo $post->content ?> </span> </div>
						<ul style="list-style: none; display: inline;">
							<li> <?php echo $post->likes ?> likes</li>
							<li> <?php echo $post->user->friends ?> Friends</li>
							<li> <?php echo $post->date ?> Date</li>
						</ul>
					</div>
				</div>
			<?php
			}
			?>		
		</div>
		</div>
	<div id="div_page_footer" style="background-color: white; text-align: center; margin-top: 10px; border-radius: 15px; padding: 10px;">RODAPE DA PAGINA</div>
</body>
</html>