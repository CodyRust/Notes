<?php

	include 'configuration.php';
	include 'database.php';

	// Define variables
	$categories = '';

	// Get categories from database
	$result = mysqli_query($con,"SELECT * FROM categories");
	while($row = mysqli_fetch_array($result)) {
		if ($row['parent'] == NULL) {
			$categories .= '<li><a class="category-list" href="' . $domain . '/index.php?category=' . $row['id'] . '">' . $row['title'] . '</a></li>';
		}
	}

	// Format content for output
	$content = '
		<ul class="nav-list">
		' . $categories . '
		</ul>
	';

?>