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
    <h2>Choose:</h2>
    <select name="professor" onchange="this.parentNode.submit()">
      <option value="">Professorlar tizimi</option>
    <?php
    $db = mysqli_connect("localhost", "root", "","professors");

  	$results = mysqli_query($db,"SELECT * FROM `professor` WHERE 1");
  	while ($row = mysqli_fetch_array($results)) {
  	 ?>
     <option><?php echo $row["name"]?></option>
   <?php } ?>
     </select>
     </form>

     <form class="form" action="update.php">
       <table cellspacing = 0 border = 1>
       <?php

       if(isset($_REQUEST["professor"])){
       $name = $_REQUEST["professor"];
       $results = mysqli_query($db,'SELECT * FROM `professor` WHERE name="'.$name.'"');
       while ($row = mysqli_fetch_array($results)) {
        ?>
        <tr>
           <td>Name:</td>
            <td><?php echo $row["name"]; ?></td>
        </tr>
        <tr>
          <td>About</td>
          <td><input name="about" type="text" value="<?php echo $row["about"]; ?>"></td>
        </tr>
        <tr>
          <td>Photo Url</td>
          <td><input name="photo" type="text" value="<?php echo $row["photo"]; ?>"></td>
        </tr>
        <tr>
          <td>Class</td>
          <td><input name="class" type="text" value="<?php echo $row["class"]; ?>"></td>
        </tr>
     <?php }

   } ?>
     </table>
     <input type="submit" />
     </form>
     <?php if(isset($_REQUEST["name"])){
       $n = $_REQUEST["name"];
       $a = $_REQUEST["about"];
       $c = $_REQUEST["class"];
       $p = $_REQUEST["photo"];
       mysqli_query($db,"UPDATE `professor` SET  `about`='".$a."' , `photo`='".$p."' , `class`='".$c."' WHERE `name`='".$n."'");
       }
        ?>


  </body>
</html>
