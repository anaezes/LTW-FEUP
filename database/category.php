<?php
function getAllCategories($username) {
  global $dbh;
  $stmt = $dbh->prepare("SELECT category.cat_name FROM category, user_cat WHERE usr LIKE :username
    AND cat_name LIKE user_cat.cat
    GROUP BY cat_name");
  $stmt->execute([
    ':username' => $username,
  ]);

  return $stmt->fetchAll();
}

function addCategory($username, $category) {

  global $dbh;
  $stmt = $dbh->prepare('INSERT INTO category VALUES(:category)');
  $stmt->execute([
    ':category' => $category, 
  ]);

  $stmt = $dbh->prepare('INSERT INTO user_cat VALUES(:category, :username)');
  $stmt->execute([
    ':username' => $username,
    ':category' => $category, 
  ]);

  return $stmt->fetch() !== false;

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

  return $stmt->fetch() !== false;
}

?>