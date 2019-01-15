<?php  
require_once('admin/scripts/read.php');

if(isset($_GET['filter'])){
	$tbl = 'tbl_movies';
	$tbl_2 = 'tbl_genre';
	$tbl_3 = 'tbl_mov_genre';
	$col = 'movies_id';
	$col_2 = 'genre_id';
	$col_3 = 'genre_name';
	$filter = $_GET['filter'];
	$results = filterResults($tbl, $tbl_2, $tbl_3, $col, $col_2, $col_3, $filter);
}else{
	$results = getAll('tbl_movies'); 
}



?>
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