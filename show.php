<html>

<head>
  <title>ITF Lab</title>
</head>

<body>
  <?php
  $conn = mysqli_init();
  mysqli_real_connect($conn, 'sorachat.mysql.database.azure.com', 'ter2002@sorachat', 'Zazaza5789', 'ITFLab', 3306);
  if (mysqli_connect_errno($conn)) {
    die('Failed to connect to MySQL: ' . mysqli_connect_error());
  }
  $res = mysqli_query($conn, 'SELECT * FROM guestbook');
  ?>
  <table width="600" border="1">
    <tr>
      <th width="100">
        <div align="center">Name</div>
      </th>
      <th width="350">
        <div align="center">Comment </div>
      </th>
      <th width="150">
        <div align="center">Link </div>
      </th>
      <th>
        <div align='center'>action</div>
      </th>
    </tr>
    <?php
    while ($Result = mysqli_fetch_array($res)) {
    ?>
      <tr>
        <td><?php echo $Result['Name']; ?></div>
        </td>
        <td><?php echo $Result['Comment']; ?></td>
        <td><?php echo $Result['Link']; ?></td>
        <td><a href="delete.php?ID=<?php echo $Result['ID'];?>">Delete</a></td>
      </tr>
    <?php
    }
    ?>
  </table>
  <?php
  mysqli_close($conn);
  ?>
  <button><a href="form.html">Add user</a></button>
</body>

</html>