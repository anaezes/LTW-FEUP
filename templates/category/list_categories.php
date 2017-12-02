<div class="categories">
  <h2>Categories</h2>
  <ul>
  	<li><a href="?cat_id=add">&#8853</a></li>
    <?php foreach ($categories as $category) { ?>
      <li><a href="?cat_id=<?=$category['cat_id']?>"><?=$category['cat_name']?></a></li>
    <?php } ?>
  </ul>
</div>