<?php # Script 3.4 - index.php
session_start();

// If no session value is present, redirect the user:
if (!isset($_SESSION['user_id'])) {

	// Need the functions:
	require ('login.php');
	exit();	

}

$page_title = 'NKU Parking - Home';
include ('includes/header.html');

?>

<h1><p>Portal Home</p></h1>
<h2><p><a href="delete.php">User Management</a></p></h2>
<h2><p><a href="manage.php">Parking Lot Management</a></p></h2>
<h2><p><a href="manage.php">Reporting</a></p></h2>

<?php
include ('includes/footer.html');
?>