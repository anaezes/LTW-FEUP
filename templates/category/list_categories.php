 <script src="javascript/scriptCategories.js" defer></script>

 <div class="lateral">
  <div class="categories">
    <h2>Categories</h2>
    <ul>
      <li>
        <!-- Trigger/Open The Modal -->
        <button id="AddCatBtn"><i class="fa fa-plus" aria-hidden="true"></i>
        </button>
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
  </div>

</div>