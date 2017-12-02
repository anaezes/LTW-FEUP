<?php
  function getAllCategories() {
    global $dbh;
    $stmt = $dbh->prepare("SELECT * FROM category GROUP BY cat_name");
    $stmt->execute();
    return $stmt->fetchAll();
  }
?>