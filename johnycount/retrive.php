<!DOCTYPE html>
<html>
  <head>
    <style >
    body{
      background-color: lightgrey;
    }
      .menu{
        display: flex;
        flex-wrap: wrap;
        background-color: black;
        padding: 10px;
      }
      .menu a{
        text-decoration: none;
        font-size: 28px;
        color: white;
        padding-right: 180px;
      }

      td div{
        width: 350px;
        word-wrap: break-word;
      }

    </style>
  </head>
  <body>
    <div class="menu">
      <a href="create.php">Create</a>
      <a href="update.php">Update</a>
      <a href="retrive.php">Retrive</a>
      <a href="delete.php">Delete</a>
    </div>
    <table cellspacing = 0 border = 1>
     <tr>
        <td>Name</td>
        <td class="about">About</td>
        <td class="photo">Photo Url</td>
        <td>Class</td>
     </tr>
    <?php
    $db = mysqli_connect("localhost", "root", "","professors");
    $results = mysqli_query($db,"SELECT * FROM `professor` WHERE 1");
    while ($row = mysqli_fetch_array($results)) {
      ?>
        <tr>
          <td><?php echo $row['name']; ?></td>
          <td><div><?php echo $row['about']; ?></div></td>
          <td><div><?php echo $row['photo']; ?></div></td>
          <td><?php echo $row['class']; ?></td>
        </tr>
      <?php } ?>
     </table>
  </body>
</html>
