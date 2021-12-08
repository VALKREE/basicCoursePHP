<div class="flexColumn profile-login">
	<form action="./server/login.php" method="POST" class="profile-form flexColumn">
		<div class="profile-inputBox flexColumn">
			<label for="login" class="profile-label">Введите логин</label>
			<input type="text" name="login" class="profile-input" placeholder="ivan" required>
		</div>
		<div class="profile-inputBox flexColumn">
			<label for="password" class="profile-label">Введите пароль</label>
			<input type="password" name="password" class="profile-input" placeholder="***" required>
		</div>
		<div class="profile-inputBox flexColumn">
			<button type="submit" class="profile-submit">Войти</button>
		</div>
	</form>
</div>