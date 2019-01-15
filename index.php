<?php  require_once('admin/scripts/read.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link href="main.css" rel="stylesheet" type="text/css">
	<title>Movie Reviews</title>
</head>
<body>

	<?php include('templates/header.php'); ?>
	<h1>This is a movie site</h1>

	<ul id="mainlist">
	<?php 

		$results = getAll('tbl_movies');

		while($row = $results->fetch(PDO::FETCH_ASSOC)): ?>
		<div id="listcontainer">
			<li id="listcon"><?php echo $row['movies_title'] ?></li>
			<ul id="listun">
				<li><img src=<?php echo '"images/'.$row['movies_cover'].'"' ?>></li>
				<li><?php echo $row['movies_year'] ?></li>
				<li><?php echo $row['movies_storyline'] ?></li>
				<a class="btn" href=<?php echo '"details.php/?id='.$row['movies_id'].'"' ?>>Read More</a>
			</ul>
		</div>
		<?php endwhile; ?>

	
	</ul>
	
	<?php include('templates/footer.php'); ?>

</body>
</html>