<?php

$conn = mysqli_init();
mysqli_real_connect($conn, '103.91.205.130', 'sorachat', 'CO22Xa6yXlaBST7Y', 'sorachat', 80);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['name'];
$comment = $_POST['comment'];
$link = $_POST['link'];


$sql = "INSERT INTO guestbook (Name , Comment , Link) VALUES ('$name', '$comment', '$link')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    ?>
    <script>
			   window.location.replace("show.php");
       </script>
       <?php
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>