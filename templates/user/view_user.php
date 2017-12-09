<div class="user">
      <div class="photo">  
        <?php echo '<img src="img/'.$_SESSION['username'].'.png" width="60" height="60">'; ?>
      </div>
      <div class="nameuser">
        <th colspan="2">  <?php echo $_SESSION['username']; ?> </th>
      </div>
      <div class="setuser">
        <a id="confIcon" href="edit_profile.php"><i class="fa fa-cog" aria-hidden="true"></i></a> 
        <a href="action_logout.php" >Log Out</a> 
      </div>
      <div class="setuser">
        <a href="friends.php"> Friends </i></a> 
      </div>
  </div>
</div>
