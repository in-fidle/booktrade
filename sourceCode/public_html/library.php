<?php

$count1 = 0;
$count3 = 0;
connectToDatabase();

try{

  $libraryQuery = $connectionToDatabase->prepare ("SELECT userName, bookName, bookPrice, tradeCondition FROM bookList");
  $libraryQuery->execute();
  $library = $libraryQuery->fetchall();
  abortDatabaseConnection();
}catch (PDOException $e) {
  echo "HAHAHAHAHA";
}

 ?>
