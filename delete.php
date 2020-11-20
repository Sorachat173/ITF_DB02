
<?php
	$conn = mysqli_connect('sorachat.mysql.database.azure.com', 'ter2002@sorachat', 'Zazaza5789', 'ITFLab');
	$sql = 'DELETE FROM guestbook WHERE ID = '.$_GET['ID'].'';
?>
<!DOCTYPE html>
<html>
    <title>Delete | page</title>
    <h2 align="center">
						<?php
							if(mysqli_query($conn, $sql)) {
                                echo "Deleted"
								?>
							<script>
			   window.location.replace("show.php");
		   </script>
							<?php
							}
							else {
								echo "Failed";
							}
						?>
						</h2>
</html>