<?php

$con=mysqli_connect("pdb1.awardspace.com","xaelan_notes","firewire","xaelan_notes");

if (isset($_POST['save'])) {
	$note = mysqli_real_escape_string($con, htmlspecialchars($_POST['note']));
	mysqli_query($con,"UPDATE notes SET content = '$note' WHERE id = '1'");
}

$result = mysqli_query($con,"SELECT * FROM notes");
while($row = mysqli_fetch_array($result)) {
	$note = $row['content'];
}
mysqli_close($con);

	$content = '
	<form method="post" action="/">
		<textarea name="note">
		 ' . $note . '
		</textarea>
		<input type="button" id="sync-button" value="sync" onclick="window.location = \'/\'" /><input type="submit" id="save-button" name="save" value="save note" />
	</form>';

	include 'template/index.php';

?>