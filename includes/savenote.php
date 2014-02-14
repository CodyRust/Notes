<?php

	if (isset($_POST['save'])) {

		include 'configuration.php';

		// Connect to the database
		include 'database.php';

		// Write new content into the database
		$note = mysqli_real_escape_string($con, htmlspecialchars($_POST['note']));
		$id = $_POST['id'];
		mysqli_query($con, "UPDATE notes SET content = '$note' WHERE id = '$id'");
		header('Location: ' . $domain . '/index.php?note=' . $id);
	}

?>