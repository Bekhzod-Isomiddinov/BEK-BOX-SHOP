<?php
include("database.php");
$project_id = $_GET['project_id'];

$query = "DELETE FROM projects WHERE id = $project_id LIMIT 1";
$result = $con->query($query);

if ($con->query($query) === TRUE) {
  		echo "project deleted successfully";
  		header('Location: projects.php');
} else {
	   echo "Error: " . $query . "<br>" . $con->error;
}

?>