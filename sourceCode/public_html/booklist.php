<?php
SESSION_START();
$count = 0;

connectToDatabase();

try{
  $temp = $_SESSION["username"];

  if($_SESSION['username'] === "Admin"){
    $bookListQuery = $connectionToDatabase->prepare ("SELECT * FROM bookList");
    $bookListQuery->execute();
    $bookList = $bookListQuery->fetchall();
  }
  else{
    $bookListQuery = $connectionToDatabase->prepare ("SELECT * FROM bookList WHERE userName= '$temp' ");
    $bookListQuery->execute();
    $bookList = $bookListQuery->fetchall();
  }

  abortDatabaseConnection();

  }catch (PDOException $e) {
    echo "HAHAHAHAHA";
  }


  ?>
