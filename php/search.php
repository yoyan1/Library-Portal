<?php
include "../server/conn.php";

$searchInput = $_GET['text'];

$searchResults = []; 
if (!empty($searchInput)) {
    $sql = mysqli_query($conn, "SELECT * FROM books WHERE LOWER(title) LIKE '%".$searchInput."%'");

    if($sql){
        while($row = mysqli_fetch_array($sql)){
            $searchResults[] = $row['title']; 
        }
    } else{
        $searchResults = ['no books found'];
    }
}


header('Content-Type: application/json');
echo json_encode($searchResults);
?>
