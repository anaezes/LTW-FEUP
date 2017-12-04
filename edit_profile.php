<link rel="stylesheet" type="text/css" href="css/style.css">
<div class="editfoto">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script>
    $(document).ready(function() {

      $('form').submit(function (event) {
        event.preventDefault();
        var name = $("#name").val();
        var cipass = $("#cipass").val();
        var ipass = $("#ipass").val();
        var iphoto = $("#iphoto").val();
        var submit = $("#submit").val();
        $(".form-message").load("action_editProfile.php", {
          name: name,
          cipass: cipass,
          ipass: ipass,
          iphoto: iphoto,
          submit: submit
          //window.location.href = "login.php";
        });
      });

    });
  </script>

    <form action="action_editProfile.php" method="POST">
      <p class="field">
        <label for="name"> New name: </label>
        <input type="text" id="name" name="name"/ placeholder="Type a new name">
        <br>
        <br>
      </p>

      <p class="field">
         <label for="ipass"> Current Password: </label>
         <input type="password" id="cipass" name="cpassword" placeholder="Type your current Password" />
         <br>
         <br>
      </p>

      <p class="field">
         <label for="ipass"> New Password: </label>
         <input type="password" id="ipass" name="password"/ placeholder="Type your new Password">
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
            </ul>
          </div>
<p class="form-message"></p>


        </form>
      
    </div>