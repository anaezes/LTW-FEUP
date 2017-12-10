 <script src="javascript/scriptFriends.js" defer></script>

 <div class="friends">
 	<div class="viewFriends">
 		<?php foreach ($friends as $friend) { ?>
 			<div class="friend">  
 				<p><?php echo '<img src="img/'.$friend['usr_2'].'.png" width="100" height="100">'; ?>
 				<p><?php echo $friend['usr_2'] ?> 
 			</div>
 			<?php } ?> 
 		</div>

 		<div class="addFriends">
 			<button id="addFriend">+ Add Friend</i>
 			</button>
 			<!-- The Modal -->
 			<div id="myModal2" class="modal2">
 				<!-- Modal content -->
 				<div class="modal-content">
 					<span class="close2">&times;</span>
 					<div class="addFriend">
 						<form action="action_addFriend.php" method="POST">
 							<p class="field">
 								<label for="users">Users</label>
 								<select id="friend" name="friend">
 									<?php foreach ($users as $user) { ?>
 										<li><option value="<?=$user['usr_username']?>"> <?=$user['usr_username']?></li>
 											<?php } ?>
 										</select>
 									</p>        
 									<div class="regBottons">
 										<ul>
 											<input type = "submit" value="Add"/>
 										</ul>
 									</div>
 								</form>
 							</div>

 						</div>

 					</div>
 				</div>
 			</div>
