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

 		<ul>
 			<li>
 				<button class="buttonFriend" id="addFriend">Add Friend</button>
 			</li>
 			<!-- The Modal -->
 			<div id="myModal2" class="modal2">
 				<!-- Modal content -->
 				<div class="modal-content">
 					<span class="close2">&times;</span>
 					<label> Add Friend </label>
 					<div class="addFriend">
 						<form action="action_addFriend.php" method="POST">
 							<p class="field">
 								<label for="users">List Users:</label>
 								<select id="friend" name="friend">
 									<?php foreach ($users as $user) { ?>
 										<li>
 											<option value="<?=$user['usr_username']?>"> 
 												<?=$user['usr_username']?> </option>
 											</li>
 											<?php 
 										} 
 										?>
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
 				<li>
 					<button class="buttonFriend" id="friendTodos"> Friends Activities </i>
 					</button>
 				</li>
 				<div id="myModal3" class="modal3" >
 					<div class="modal-content3">
 						<span class="close3">&times;</span>
 						<label> Friends activities </label>
 						<div class="viewTodos">
 							<?php  if(sizeof($sharedTodos) > 0)
 							 foreach ($sharedTodos as $sharedTodo) { 
 								$todo_id = $sharedTodo['td_id'];
 								$todo_cat = $sharedTodo['cat_name'];
 								$todo_check = $sharedTodo['td_check'];
 								$todo_date = $sharedTodo['td_date'];
 								$todo_friend = $sharedTodo['usr_username']
 								?>
 								<div class="viewTodo">
 								<p class="name"> <?=$sharedTodo['td_name']?> </p>
 								<p class="description"><?=$sharedTodo['td_description']?></p>
 								<p class="date"><?=$todo_date?></p>
 								<p class="Friend"><?=$todo_friend?></p>
 								</div>
 								<?php } else {
 									echo "... nothing to show";
 								}?>
 							</div>
 						</div>
 					</div>
 					<li>
 						<button class="buttonFriend" id="friendTodos" onclick="window.location.href='./index.php'"> Return </i>
 						</button>
 					</li>
 				</ul>
 			</div>