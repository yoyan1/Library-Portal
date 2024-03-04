<?php include "./server/conn.php"; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/index.css" />
    <title>CPSU Library</title>
  </head>
  <body>
    <header>
      <div class="nav-bar">
        <img src="images/bars.png" width="29px" alt="" />
        <form action="">
          <input type="search" name="" id="search" placeholder="Search" />
        </form>
      </div>
    </header>
    <div class="container">
      <div class="text-wrap">
        <h5>CPSU</h5>
        <p>Central Philippine State University</p>
      </div>
      <div class="book-wrap">
        <div class="top">
          <div class="left">
            <h3>DIGITAL LIBRARY</h3>
            <p>San Carlos DJVV Campus</p>
          </div>
          <div class="right">
            <img src="images/cpsu-logo.png" width="77px" alt="" />
          </div>
        </div>
        <div class="center">
            <?php $category = mysqli_query($conn, "SELECT * FROM category");
                  while($row=mysqli_fetch_array($category)){ 
                        echo '<a href="">'.$row['category'].'</a>';
                  }
                ?>
        </div>
        <div class="bottom">
          <p>Books Available</p>
          <div class="books-recommended">
            <?php
								$sql = mysqli_query($conn, "SELECT * from books where section != 'Reserved'");
								while ($row = mysqli_fetch_array($sql)) { ?>
                    <a href="./pages/viewBooks.php?id=<?=$row['bookid']?>" class="books">
                      <img
                        src="images/philosophy.png"
                        alt=""
                        width="72px"
                      />
                      <h3><?=$row['title'] ?></h3>
                    </a>
            <?php } ?>
          </div>
        </div>
      </div>
      <div class="borrow-wrap">
        <p>Reserved Books</p>
        <div class="recent-borrow">
        <?php
						$sql = mysqli_query($conn, "SELECT * from books where section = 'Reserved'");
						while ($row = mysqli_fetch_array($sql)) { ?>
                  <a href="./pages/viewBooks.html" class="books">
                    <img
                      src="images/english.png"
                      alt=""
                      width="72px"
                    />
                    <h3><?=$row['title']?></h3>
                  </a>
          <?php } ?>
        </div>
      </div>
      <div class="subject-wrap">
        <?php $category = mysqli_query($conn, "SELECT * FROM category");
              while($row=mysqli_fetch_array($category)){ 
                    echo '<a href="">'.$row['category'].'</a>';
              }
                ?>
      </div>
    </div>
    <div class="footer"></div>
  </body>
</html>
