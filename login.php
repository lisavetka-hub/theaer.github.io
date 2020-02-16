<?php 
	require "database.php";
	
	$data = $_POST;
	if(isset($data['do_login'])) {
		$errors = array();
		$user = R::findOne('users', 'login = ?', array($data['login']));
		if($user) {
			//логин существует
			if(password_verify($data['password'], $user->password)) {
				//все хорошо,логиним пользователя
				$_SESSION['logged_user'] = $user;
				echo '<div style="color: green;">вы автаризованы<br>
				можете перейти на <a href="mainpage1.php"> главную</a>  страницу</div><hr>';
			} else {
				$errors[] = 'неверно введен пароль';
			}
		}else {
			$errors[] = 'пользователь с таким логином уже сужествует';
		}
		
		if(!empty($errors)) {
			echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
		}
	}
?>

<form action="login.php" method="POST">
							
							<div class="pole">
										<label>Имя пользователя:</label>
										<div class="input"><input type="text" name="login" value="<?php echo @$data['login']; ?>"></div>	
									</div>

									<div class="pole">
										<a href="#" id="zab">Забыли пароль?</a>
									<label>Пароль:</label>
										<div class="input"><input type="password" name="password" value="<?php echo @$data['password']; ?>"></div>   
									</div>

									<div class="sub">
										<button type="submit" name="do_login">войти</button>
										<label id="otmetka"><input type="checkbox" /> Запомнить меня</label>
							</div>


							</form>


