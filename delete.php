
<?php
	$conn = mysqli_connect('103.91.205.130', 'sorachat', 'CO22Xa6yXlaBST7Y', 'sorachat');
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