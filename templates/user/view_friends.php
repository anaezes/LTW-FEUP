
<div class="friends">
	<?php foreach ($friends as $friend) { ?>
		<div class="photo">  
			<?php echo '<img src="img/'.$friend['usr_2'].'.png" width="100" height="100">'; ?>
		</div>
		<div class="nameuser">
			<?php echo $friend['usr_2'] ?> 
		</div>
		<?php } ?> 
</div>
