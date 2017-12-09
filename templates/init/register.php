<div id="register">
			<div class="form-1">

				<form action="action_register.php" method="POST" enctype="multipart/form-data">
					<p class="field">
						<label for="iuser"> Username: </label>
						<input type="text" id="iuser" name="username" required />
						<span class="hint">Only lowercase, at least 3 characters</span>
						<br>
						<span id="msg"></span>
						<br>
						<br>
					</p>
					<p class="field">
						<label for="ipass"> Password: </label>
						<input type="password" id="ipass" name="password" required />
						 <span class="hint">One uppercase, 1 symbol, 1 number, at least 8 characters</span>
						<br>
						<br>
					</p>
				    <p class="field">
						<label for="ipass"> Repeat Password: </label>
						<input type="password" id="ipass" name="passwordr" required />
						<br>
						<br>
					</p>
					<p class="field">
						<label for="iname"> Name: </label>
						<input type="text" id="iname" name="name" required />
						<br>
						<br>
					</p>
					<p class="field">
						<label for="iphoto"> Choose Photo: </label>
						<input type="file" id="iphoto" name="photo"/>
						<br>
						<br>
					</p>
					
					<div class="regBottons">
						<ul>
							<input type = "reset" value="Clear"/>
							<input type = "submit" value="Register"/>
						</ul>
						<!--<a id="reg" href="registar.php">REGISTAR</a>-->
					</div>
			</form>
		</div>
	</div>
</body>

</html>