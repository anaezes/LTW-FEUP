<div class="user">
      <div class="photo">  
         <a href="view_profile.php">
        <?php echo '<img src="img/'.$_SESSION['username'].'.png" width="60" height="60">'; ?>
        <a>
      </div>
      <div class="nameuser">
        <th colspan="2">  <a href="view_profile.php">
          <?php echo $_SESSION['usr_name']; ?> </a> </th>
      </div>

       <div class="viewFriends">
        <a href="friends.php"> Friends </i></a> 
      </div>

      <div class="setuser"> 
        <a href="action_logout.php" >Log Out</a> 
      </div>
     
  </div>
</div>
