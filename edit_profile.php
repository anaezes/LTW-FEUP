<script src="javascript/script.js" defer></script>
  <link rel="stylesheet" href="css/style.css">
<section id="editProfile">

    <form action="action_editProfile.php" method="POST" enctype="multipart/form-data">
      <p class="field">
        <label for="name"> New name: </label>
        <input type="text" id="name" name="thename" required />
        <span class="hint">Only lowercase, at least 3 characters</span>
        <br>
        <br>
      </p>

      <p class="field">
         <label for="ipass"> Current Password: </label>
         <input type="password" id="cipass" name="cpass" placeholder="Type your current Password" required />
         <br>
         <br>
      </p>

      <p class="field">
         <label for="ipass"> New Password: </label>
         <input type="password" id="ipass" name="pass"/ placeholder="Type your new Password" required>
         <span class="hint">One uppercase, 1 symbol, 1 number, at least 8 characters</span>
         <br>
         <br>
      </p>

       <p class="field">
         <label for="ipass"> Repeat Password: </label>
         <input type="password" id="inpass" name="passr"/ placeholder="Repeat your Password." required>
         <span class="hint">Must match password</span>
         <br>
         <br>
      </p>

      <p class="field">
        <label for="iphoto"> Change Photo: </label>
        <input type="file" id="iphoto" name="photo"/>
        <br>
        <br>
      </p>
	  <div class="editButtons">
		<ul>
		  <input id = "submit" type = "submit" value="Save Changes"/>
		  <input type = "reset" value="Cancel"/>
		  <a id="reg" href="index.php">VOLTAR</a>
		</ul>
	  </div>
		<p class="form-message"></p>
    </form>
      
</section>