<link rel="stylesheet" href="css/style.css">
<div class="todo">
	<h1>Profile</h1>
	 <div class="photo">  
        <?php echo '<img src="img/'.$_SESSION['username'].'.png" width="200" height="200">'; ?>
      </div>
	  <br>
	  <div class="nameuser">
        <h2>  <?php echo $_SESSION['username']; ?> </h2>
        <br>
		<h1>  <?php echo $_SESSION['usr_name']; ?> </h1>
      </div>
	  <div class="editButtons">
		<ul>

			<button class="buttonFriend" id="friendTodos" onclick="window.location.href='/edit_profile.php'"> Edit Profile </button>

			<button class="buttonFriend" id="friendTodos" onclick="window.location.href='/index.php'"> Return </i> </button>
		</ul>
	  </div>
</div>