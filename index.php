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
        <!-- <img src="images/bars.png" width="29px" alt="" /> -->
        <form action="">
          <input type="search" id="search-input" name="" id="search" placeholder="Search" />
          <div class="suggestion"></div>
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
								$sql = mysqli_query($conn, "SELECT * from books where copies != 0 ");
								while ($row = mysqli_fetch_array($sql)) { ?>
                    <a href="./pages/viewBooks.php?id=<?=$row['bookid']?>" class="books">
                    <?php 
                        $a = $row['bookimage'];
                        if(empty($a)) { ?>
                        <img
                          src="images/book.png"
                          alt=""
                          width="72px"
                        />
                      <?php } else { ?>
                        <img
                          src="uploads/<?= $a ?>"
                          alt=""
                          width="72px"
                        />
                      <?php }?>
                      <h3><?=$row['title']?></h3>
                    </a>
            <?php } ?>
          </div>
        </div>
      </div>
      <?php $sql = mysqli_query($conn, "SELECT * from books where copies = 0"); 
      if(mysqli_num_rows($sql) > 0){ ?>
        <div class="borrow-wrap">
          <p>Books Not Available</p>
          <div class="recent-borrow">
          <?php
              
              while ($row = mysqli_fetch_array($sql)) { ?>
                    <a href="./pages/viewBooks.php?id=<?=$row['bookid']?>" class="books">
                      <?php 
                        $a = $row['bookimage'];
                        if(empty($a)) { ?>
                        <img
                          src="images/book.png"
                          alt=""
                          width="72px"
                        />
                      <?php } else { ?>
                        <img
                          src="uploads/<?= $a ?>"
                          alt=""
                          width="72px"
                        />
                      <?php }?>
                      <h3><?=$row['title']?></h3>
                    </a>
            <?php } ?>
          </div>
        </div>
        
     <?php }
      ?>
      <div class="subject-wrap">
        <?php $category = mysqli_query($conn, "SELECT * FROM category");
              while($row=mysqli_fetch_array($category)){ 
                    echo '<a href="">'.$row['category'].'</a>';
              }
                ?>
      </div>
    </div>
    <!-- <div class="footer"></div> -->
  <script>
   let searchInput = document.getElementById('search-input');
    let suggestion = document.querySelector('.suggestion');

searchInput.addEventListener('input', async function() {
    let input = searchInput.value.trim();
    if (input.length === 0) {
        suggestion.innerHTML = ''; 
        return;
    }

    try {
        const response = await fetch(`./php/search.php?text=${encodeURIComponent(input)}`);
        
        if (response.ok) {
            const searchData = await response.json();
            suggestion.innerHTML = '';
            searchData.forEach(result => {
                suggestion.innerHTML += `<a href="./pages/viewBooks.php?title=${result}">${result}</a><br>`;
            });
        } else {
            console.error('Failed to fetch search results:', response.status, response.statusText);
        }
    } catch (error) {
        console.error('Error fetching search results:', error);
    }
});

  </script>
  </body>
</html>
