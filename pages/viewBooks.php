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

      <div class="nav-bar-books">
        <a href="../index.php" class="back"><img src="../images/back-button.png" width="25" height="25"><h5>Back</h5></a>
     </div>
    <div class="view-books-container">
      <div class="book-container">
          <img
            src="../images/science.png"
            width="92px"
            height="106px"
            alt=""
          /> 
  
          <div class="book-name">
            <h3><?=$row['title']?></h3>
            <h5>this is a sub text</h5>
            <label>roland clarion</label>
          </div>
        </div>
        <div class="other-info">
          <label for="">Available</label>
        </div>

    </div>
   </body>
</html> 