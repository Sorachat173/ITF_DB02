<html>

<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<title>ITF Lab</title>
<?php
  $conn = mysqli_init();
  mysqli_real_connect($conn, 'sorachat.mysql.database.azure.com', 'ter2002@sorachat', 'Zazaza5789', 'ITFLab', 3306);
  if (mysqli_connect_errno($conn)) {
    die('Failed to connect to MySQL: ' . mysqli_connect_error());
  }
  $res = mysqli_query($conn, 'SELECT * FROM guestbook');
  ?>
</head>

<body>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Comment</th>
      <th scope="col">Link</th>
      <th scope="col">Delete</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
  <?php
    while ($Result = mysqli_fetch_array($res)) {
    ?>
      <tr>
        <td><?php echo $Result['Name']; ?></div>
        </td>
        <td><?php echo $Result['Comment']; ?></td>
        <td><?php echo $Result['Link']; ?></td>
        <td><a href="delete.php?ID=<?php echo $Result['ID'];?>">Delete</a></td>
        <td><a href="edit.php?ID=<?php echo $Result['ID'];?>">edit</a></td>
      </tr>
    <?php
    }
    ?>
  </tbody>
  <?php
  mysqli_close($conn);
  ?>
</table>


  <!--
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
        <div align='center'>Delete</div>
      </th>
      <th>
        <div align='center'>Edit</div>
      </th>
    </tr>
    
  </table>-->
  
  <button type="button" class="btn btn-dark"><a href="form.html">Add user</a></button>
</body>

</html>