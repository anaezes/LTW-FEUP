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
            <label> Add Category </label>
            <div class="addCat">
              <form action="action_addCat.php" method="POST">
               <p class="field">
                <label for="category"> Name:  </label>
                <input type="text" id="NewCat" name="NewCategory" required /> 
                <span class="hint">First letter must be Uppercase. At least 2 characters.</span>
                <label for="Color"> Color: &nbsp   </label>
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
