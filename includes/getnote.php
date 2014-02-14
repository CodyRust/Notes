<?php

	include 'configuration.php';

	// Connect to the database
	include 'database.php';

	// Get latest note content from database
	$result = mysqli_query($con,"SELECT * FROM notes WHERE id = '$noteId'");
	while($row = mysqli_fetch_array($result)) {
		$note = $row['content'];
		$id = $row['id'];
		$catid = $row['catid'];
	}

	// Format content for output
	$content = '
	<form method="post" action="includes/savenote.php">
		<textarea name="note">
		 ' . $note . '
		</textarea>
		<input type="hidden" name="id" value="' . $id . '" />
		<input type="button" id="back-button" value="back to category" onclick="window.location = \'' . $domain . '/index.php?category=' . $catid . '\'" />
		<input type="button" id="sync-button" value="sync" onclick="window.location = \'' . $domain . '/index.php?note=' . $id . '\'" />
		<input type="submit" id="save-button" name="save" value="save note" />
	</form>';

?>