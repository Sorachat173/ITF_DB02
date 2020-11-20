<?php
	$conn = mysqli_connect('sorachat.mysql.database.azure.com', 'ter2002@sorachat', 'Zazaza5789', 'ITFLab');

	$name = $_POST['Name'];
	$comment = $_POST['Comment'];
	$link = $_POST['Link'];

	$sql = 'UPDATE guestbook SET name = "'.$name.'", comment = "'.$comment.'", link = "'.$link.'" WHERE ID = '.$id.'';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>
<body>
<?php
							if(mysqli_query($conn, $sql)) {
                                echo 'Success'
								?>
							<div class="card">
							<script>
			   window.location.replace("show.php");
		   </script>
							<?php
							}
							else 
								{
									echo "Fail to load";
							}
						?>
</body>
</html>