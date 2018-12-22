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
      h1{
        position: absolute;
        top: 200px;
        left: 500px;
      }
      ul{
        position: absolute;
        top: 300px;
        left: 480px;

      }
      li{
        margin-top: 5px;
      }
      span{
        color: red;
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
     
     <div class="welcomepage">
       <h1>Welcome to Admin Page!</h1>
       <ul>
         <li>You are able to <span>create</span> new elements in Create Box</li>
         <li>You are able to <span>update</span> the info in Update Box</li>
         <li>You are able to <span>retrieve</span> the info in Retrieve Box</li>
         <li>You are able to <span>delete</span> the elements in Delete Box</li>
       </ul>
     </div>
  </body>
</html>
