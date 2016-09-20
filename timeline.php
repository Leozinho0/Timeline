<?php
$arr_posts = json_decode(file_get_contents("data.json"));
//print_r($arr_posts);
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
			margin: 0px;
		}
	</style>
</head>
<body>
	<div id="div_page_header" style="background-color: grey;">CABECALHO DA PAGINA</div>
	<div id="div_main" style="margin: 0 auto; width: 600px; border:1px solid #000000; border-radius: 10px; padding:0 10px">
		<?php
		foreach($arr_posts as $post)
		{
		?>
			<div id="div_post" style="border:1px solid #000000; border-radius: 10px; margin-top: 10px; padding: 10px;">
				<div id="div_post_header" style="height: 100px;">
					<div style="float: left;"> <img src="<?php echo $post->user->picture ?>" width="100" /> </div>
					<div> <span style="font-size: 50px;"> <?php echo $post->user->username ?> </span> <br /> <?php echo $post->user->location ?> </div>
				</div>
				<div id="div_post_content" style="margin-top: 10px;">
					<div>conteudo</div>
					<ul style="list-style: none;">
						<li>likes</li>
						<li>comenjtarios</li>
						<li>.....</li>
					</ul>
				</div>
				<div id="div_post_footer">
					Rodape da postagem
				</div>
			</div>
		<?php
		}
		?>		
	</div>
	<div id="div_page_footer" style="background-color: green;">RODAPE DA PAGINA</div>
</body>
</html>