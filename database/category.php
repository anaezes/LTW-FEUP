<?php
  function getAllCategories() {
    global $dbh;
    $stmt = $dbh->prepare("SELECT * FROM category GROUP BY cat_name");
    $stmt->execute();
    return $stmt->fetchAll();
  }

  function addCategory($username, $category) {
		global $dbh;
		$stmt = $dbh->prepare('INSERT INTO category VALUES(NULL, :category)');
		$stmt->execute([
			':category' => $category, 
		]);
		return $stmt->fetch() !== false;
  }
?>