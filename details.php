	<?php require_once('admin/scripts/read.php'); ?>
	<?php include('templates/header.php'); ?>

	<?php 

		$movieid = $_GET['id'];
		$results = getSingle('tbl_movies', 'movies_id', $movieid);

		while($row = $results->fetch(PDO::FETCH_ASSOC)): ?>
		<h2><?php echo $row['movies_title'];?></h2>
		<img src=<?php echo '"/moviereviews2/images/'.$row['movies_cover'].'"' ?>>
		<p><?php echo $row['movies_storyline'] ?></p>
		<?php endwhile; ?>

	<?php include('templates/footer.php'); ?>