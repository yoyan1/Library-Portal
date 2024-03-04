<?php 
include "../server/conn.php"; 
if(isset($_GET['id'])){
  $sql = mysqli_query($conn, "SELECT * FROM books WHERE bookid = '".$_GET['id']."'");
  $row = mysqli_fetch_array($sql);
} else{

}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../style/index.css" />
    <title>CPSU Library</title>
  </head>
  <body>
    <header>
      <div class="nav-bar">
        <img src="../images/bars.png" width="29px" alt="" />
        <form action="">
          <input type="search" name="" id="search" placeholder="Search" />
        </form>
      </div>
      <div class="book-container">
        <img
          src="../images/science.png"
          width="92px"
          height="106px"
          alt=""
        />
        <div class="book-name">
          <h3><?=$row['title']?></h3>
          <p>Author: <?=$row['authors']?></p>
        </div>

      </div>
    </header>
    <div>
      <p>status: <?=$row['section'] == 'Reserved'? $row['section'] : 'Available'?></p>
      <p></p>
    </div>
   </body>
</html> 