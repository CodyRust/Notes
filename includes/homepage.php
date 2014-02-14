<?php

	include 'configuration.php';
	include 'database.php';

	// Define variables
	$categories = '';

	// Get categories from database
	$result = mysqli_query($con,"SELECT * FROM categories");
	while($row = mysqli_fetch_array($result)) {
		$categories .= '<li><a href="' . $domain . '/index.php?category=' . $row['id'] . '">' . $row['title'] . ' &raquo;</a></li>';
	}

	// Format content for output
	$content = '
		<ul>
		' . $categories . '
		</ul>
	';

?>