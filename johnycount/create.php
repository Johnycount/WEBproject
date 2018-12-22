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
      table{
        margin-top: 50px;
        margin-left: 20px;
      }
      .button{
        margin-top: 10px;
        margin-left: 208px;
      }
      td{
        color: blue;
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

    <?php
    $db = mysqli_connect("localhost", "root", "","professors");
    ?>

     <form class="form" action="create.php">
       <table cellspacing = 0 border = 1>
        <tr>
           <td>Name:</td>
            <td><input name="name" type="text"></td>
        </tr>
        <tr>
          <td>About</td>
          <td><input name="about" type="text"></td>
        </tr>
        <tr>
          <td>Photo Url</td>
          <td><input name="photo" type="text"></td>
        </tr>
        <tr>
          <td>Class</td>
          <td><input name="class" type="text"></td>
        </tr>
     </table>
     <input class="button" type="submit" value="Submit" />
     </form>
     <?php if(isset($_REQUEST["name"])){
       $n = $_REQUEST["name"];
       $a = $_REQUEST["about"];
       $c = $_REQUEST["class"];
       $p = $_REQUEST["photo"];
       mysqli_query($db,"INSERT INTO `professor` (`name`,`about`,`photo`,`class`) VALUES ('".$n."','".$a."','".$p."','".$c."' )");
       }
        ?>


  </body>
</html>
