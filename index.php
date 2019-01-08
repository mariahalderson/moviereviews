<?php  require_once('admin/scripts/read.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Movie Reviews</title>
</head>
<body>

	<?php include('templates/header.php'); ?>
	<h1>This is a movie site</h1>

	<ul>
	<?php 

		$results = getAll('tbl_movies');

		while($row = $results->fetch(PDO::FETCH_ASSOC)){
			echo '<li>'.$row['movies_title'].'</li>';
		}

	?>
	</ul>
	
	<?php include('templates/footer.php'); ?>
</body>
</html>