	<?php require_once('admin/scripts/read.php'); ?>
	<?php include('templates/header.php'); ?>

	<ul>
	<?php 

		$results = getAll('tbl_movies');

		while($row = $results->fetch(PDO::FETCH_ASSOC)){
			echo '<li>'.$row['movies_title'].'</li>';
		}

	?>
	</ul>

	<?php include('templates/footer.php'); ?>