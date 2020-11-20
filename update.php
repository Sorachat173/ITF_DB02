<?php
	$conn = mysqli_connect('sorachat.mysql.database.azure.com', 'ter2002@sorachat', 'Zazaza5789', 'ITFLab');

	$Name = $_POST['Name'];
	$Comment = $_POST['Comment'];
	$Link = $_POST['Link'];

	$sql = 'UPDATE guestbook SET Name = "'.$Name.'", Comment = "'.$Comment.'", Link = "'.$Link.'" WHERE ID = '.$id.'';
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