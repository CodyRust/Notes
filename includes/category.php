<?php

	include 'configuration.php';
	include 'database.php';

	// Define variables
	$categories = '';
	$notes = '';

	// Get categories from database
	$result = mysqli_query($con,"SELECT * FROM categories WHERE parent = '$catId'");
	while($row = mysqli_fetch_array($result)) {
		$categories .= '<li><a class="category-list" href="' . $domain . '/index.php?category=' . $row['id'] . '">' . $row['title'] . '</a></li>';
	}

	// Get notes from database
	$result = mysqli_query($con,"SELECT * FROM notes WHERE catid = '$catId'");
	while($row = mysqli_fetch_array($result)) {
		$notes .= '<li><a class="note-list" href="' . $domain . '/index.php?note=' . $row['id'] . '">' . $row['title'] . '</a></li>';
	}

	// Format content for output
	$content = '
		<ul class="nav-list">
		' . $categories . $notes . '
		</ul>
	';

?>