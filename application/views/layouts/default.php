<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	
		<?php 
			foreach( $assets['css'] as $css ) 
			{
				echo '<link rel="stylesheet" type="text/css" href="/css/'. $css .'.css">';
			}
			foreach( $assets['js'] as $js ) 
			{
				echo '<script type="text/javascript" src="/js/' . $js . '.js"></script>';
			}
		?>
		<title><?php echo $title; ?></title>
	</head>
	
	<body>
	
		<?php 
			echo $header;
		?>
		
			<?php 
				echo $content;
			?>
			
		<?php 
			echo $footer;
		?>
	</body>
</html>