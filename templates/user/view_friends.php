
<div class="friends">
	<?php foreach ($friends as $friend) { ?>
		<div class="friend">  
			<p><?php echo '<img src="img/'.$friend['usr_2'].'.png" width="100" height="100">'; ?>
			<p><?php echo $friend['usr_2'] ?> 
		</div>
		<?php } ?> 
</div>
