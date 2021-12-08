<div class="flexColumn profile-register">
	<form action="./server/register.php" method="POST" class="profile-form flexColumn">
		<div class="profile-inputBox flexColumn">
			<label for="name" class="profile-label">Введите имя</label>
			<input type="text" name="name" class="profile-input" placeholder="Иван" required>
		</div>

		<div class="profile-inputBox flexColumn">
			<label for="email" class="profile-label">Введите email</label>
			<input type="email" name="email" class="profile-input" placeholder="ivanovii@gmail.com" required>
		</div>

		<div class="profile-inputBox flexColumn">
			<label for="login" class="profile-label">Введите логин</label>
			<input type="text" name="login" class="profile-input" placeholder="ivan" required>
		</div>

		<div class="profile-inputBox flexColumn">
			<label for="password" class="profile-label">Введите пароль</label>
			<input type="password" name="password" class="profile-input" placeholder="***" required>
		</div>

		<div class="profile-inputBox flexColumn">
			<label for="confirmPassword" class="profile-label">Подтвердите пароль</label>
			<input type="password" name="confirmPassword" class="profile-input" placeholder="***" required>
		</div>

		<div class="profile-inputBox flexColumn">
			<button type="submit" class="profile-submit">Зарегистрироваться</button>
		</div>
	</form>
</div>