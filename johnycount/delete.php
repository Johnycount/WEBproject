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
    </style>
  </head>
  <body>
    <div class="menu">
      <a href="create.php">Create</a>
      <a href="update.php">Update</a>
      <a href="retrive.php">Retrive</a>
      <a href="delete.php">Delete</a>
    </div>
    <form>
    <h2>Who do you want to Delete?</h2>
    <select name="professor" onchange="this.parentNode.submit()">
      <option value="">Professorlar tizimi</option>
    <?php
    $db = mysqli_connect("localhost", "root", "","professors");

  	$results = mysqli_query($db,"SELECT * FROM `professor` WHERE 1");
  	while ($row = mysqli_fetch_array($results)) {
  	 ?>
     <option value="<?php echo $row["name"]?>"><?php echo $row["name"]?></option>
   <?php } ?>
     </select>

     </form>
     <?php if(isset($_REQUEST["professor"])){
       mysqli_query($db,"DELETE FROM `professor` WHERE `name`='".$_REQUEST["professor"]."' ");
       }
      ?>


  </body>
</html>
