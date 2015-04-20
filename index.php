<!DOCTYPE html>
<html>
<head>
	<title>simple todo-list</title>
</head>
<link rel="stylesheet" type="text/css" href="css/main.css">

<body>
 <div class="wrap">
 		<div class="task-list">
 				<ul>
 						<?php require("includes/connect.php"); ?>
 				</ul>
 		</div>
 </div>
 <form class="add-new-task"autocomplete="off">
 		<input type="text" name="new-text" placeholder="Add new item..."/>
 		</form>
</body>
</html>