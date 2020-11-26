
<?php
	$conn = mysqli_connect('ihost.it.kmitl.ac.th', 'it63070173', 'Zazaza5789', 'it63070173_new02', 3306);
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