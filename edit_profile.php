<div class="editfoto">

    <form action="action_editProfile.php" method="POST">
      <p class="field">
        <label for="name"> New name: </label>
        <input type="text" id="name" name="name"/>
        <br>
        <br>
      </p>

      <p class="field">
         <label for="ipass"> Current Password: </label>
         <input type="password" id="cipass" name="cpassword"/>
         <br>
         <br>
      </p>

      <p class="field">
         <label for="ipass"> New Password: </label>
         <input type="password" id="ipass" name="password"/>
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
              <input type = "submit" value="Save Changes"/>
              <input type = "reset" value="Cancel"/>
            </ul>

          </div>


        </form>
      
    </div>