
<div class="lateral">
  <div class="categories">
    <h2>Categories</h2>
    <ul>

      <li>

        <!-- Trigger/Open The Modal -->
        <button id="AddCatBtn">&#8853</button>

        <!-- The Modal -->
        <div id="myModal" class="modal">

          <!-- Modal content -->
          <div class="modal-content">
            <span class="close">&times;</span>
            <div class="addCat">
              <form action="action_addCat.php" method="POST">
               <p class="field">
                <label for="category"> Category  </label>
                <input type="text" id="NewCat" name="NewCategory"/>
                <label for="Color"> Choose color &nbsp   </label>
                <input name="Color" type="color"/>
                <br>
              </p>				
              <div class="regBottons">
                <ul>
                 <input type = "submit" value="OK"/>
               </ul>
             </div>
           </form>
         </div>

       </div>

     </div>

   </li>

   <li> 
    <button id="CatBtn" onclick="selectCat(event)">All</button>
  </li>


  <?php foreach ($categories as $category) { 
    $cat_color = $category['cat_color'];
    $cat_name = $category['cat_name'];
    ?>

    <li>
      <a href="#" onclick="selectCat(event)"
      style="color:<?php echo $cat_color?>;"
      onmouseover='this.style.background="<?php echo $cat_color?>",
      this.style.color="white" ' 
      onmouseout='this.style.background="#F8F8FF",
      this.style.color="<?php echo $cat_color?>" '>
      <?=$cat_name?> 
    </a>
  </li>
  <?php } ?>

</ul>
</div>

<div class="user">
  <table>
    <col width="70">
    <tr>
      <th rowspan="3">  
        <?php echo '<img src="img/'.$_SESSION['username'].'.png" width="60" height="60">'; ?> </th>
        <th colspan="2">  <?php echo $_SESSION['usr_name']; ?> </th>
      </tr>

      <tr>
        <th> <a href="edit_profile.php" style="font-size: 25px">&#x2699</a> </th>
        <th> <a href="action_logout.php" >Log Out</a> </th>
      </tr>
    </table>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("AddCatBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

function selectCat(event){

  // Give the parameter a variable name
  var cat = event.target.innerText;
  
  var x = document.getElementsByClassName("dynamic-content");

  console.log(x);
  console.log(x.length);

  if(cat == 'All'){
    for(var i = 0; i < x.length; i++)
    {
      console.log(x[i].id);
      $('#'+x[i].id).show();
    }
  }
  else {
    for(var i = 0; i < x.length; i++){
      if ((x[i].id).indexOf(cat) !== -1)
        $('#'+x[i].id).show();
      else
       $('#'+x[i].id).hide();
   }

 }
}
</script>