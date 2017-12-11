<?php
function getAllCategories($username) {
  global $dbh;
  $stmt = $dbh->prepare("SELECT category.cat_name, category.cat_color FROM category, user_cat WHERE usr LIKE :username
    AND cat_name LIKE user_cat.cat
    GROUP BY cat_name");
  $stmt->execute([
    ':username' => $username,
  ]);

  return $stmt->fetchAll();
}

function addCategory($username, $category, $color) {

  global $dbh;
  $stmt = $dbh->prepare('INSERT INTO category VALUES(:category, :color)');
  $stmt->execute([
    ':category' => $category,
     ':color' => $color, 
  ]);

  $stmt = $dbh->prepare('INSERT INTO user_cat VALUES(:category, :username)');
  $status = $stmt->execute([
    ':username' => $username,
    ':category' => $category, 
  ]);

  return $status;

}

function addFirstCategories($username) {

  global $dbh;
  $stmt = $dbh->prepare("INSERT INTO user_cat VALUES('Home', :username)");
  $stmt->execute([':username' => $username]);

  $stmt = $dbh->prepare("INSERT INTO user_cat VALUES('Work', :username)");
  $stmt->execute([':username' => $username]);

  $stmt = $dbh->prepare("INSERT INTO user_cat VALUES('Finances', :username)");
  $stmt->execute([':username' => $username]);

  $stmt = $dbh->prepare("INSERT INTO user_cat VALUES('Sport', :username)");
  $stmt->execute([':username' => $username]);

  $stmt = $dbh->prepare("INSERT INTO user_cat VALUES('Leisure', :username)");
  $stmt->execute([':username' => $username]);

  $stmt = $dbh->prepare("INSERT INTO user_cat VALUES('Other', :username)");
  $stmt->execute([':username' => $username]);

  exit();
}

?>