<?php

	include 'includes/configuration.php';
	include 'includes/database.php';

	// Obtain page information
	if (isset($_GET['page'])) {
		$page = $_GET['page'];
	} else {
		$page = '';
	}

	if (isset($_GET['category'])) {
	// View a specific category

		// Define category id
		$catId = $_GET['category'];

		include 'includes/category.php';

	} else if (isset($_GET['note'])) {
	// View a specific note

		// Define note id
		$noteId = $_GET['note'];

		// Include note compiler
		include 'includes/getnote.php';

	} else if ($page == '') {
	// Default view - home page

		include 'includes/homepage.php';

	} else if ($page == 'category') {
	// Create new category


	}

	// Include template file for display
	include 'template/index.php';

?>