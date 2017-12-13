<script src="javascript/scriptEdit.js" defer></script>
  <link rel="stylesheet" href="css/style.css">
<section id="editProfile">

    <form action="action_editProfile.php" method="POST" enctype="multipart/form-data">
      <p class="field">
        <label for="name"> New name: (Optional)</label>
        <input type="text" id="name" name="thename" />
        <span class="hint">Symbols are not allowed.</span>
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
         <label for="ipass"> New Password: (Optional)</label>
         <input type="password" id="ipass" name="pass"/ placeholder="Type your new Password">
         <span class="hint">One uppercase, 1 symbol, 1 number, at least 8 characters</span>
         <br>
         <br>
      </p>

       <p class="field">
         <label for="ipass"> Repeat Password: (Optional)</label>
         <input type="password" id="inpass" name="passr"/ placeholder="Repeat your Password.">
         <span class="hint">Must match password</span>
         <br>
         <br>
      </p>

      <p class="field">
        <label for="iphoto"> Change Photo: (Optional)</label>
        <input type="file" id="iphoto" name="photo"/>
        <br>
        <br>
      </p>
	  <div class="editButtons">
		<ul>
		  <input id = "submit" type = "submit" value="Save"/>
		  <input type = "reset" value="Cancel" 
              onclick="window.location='./view_profile.php';return false;"
		</ul>
	  </div>
		<p class="form-message"></p>
    </form>
      
</section>