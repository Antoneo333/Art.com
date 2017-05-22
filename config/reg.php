<?php
	include('config.php');
	if (empty($_POST))
	{
		array_push($debug_mass, "введите данные в формы");
	}
	else
	{
		$entered_login = $_POST['login'];
		$entered_password = $_POST['password'];
		switch ($_POST['action'])
		{
			case "to_log":
				array_push($debug_mass, "Логинка работает","Данные из формы:","Логин: $entered_login", "Пароль: $entered_password");	
				$result = mysqli_query($connect, "SELECT * FROM users WHERE login = '$entered_login' and password = '$entered_login'");
				if (mysqli_num_rows($result) == 0)
				{
					array_push($debug_mass, 'Такого пользователя нет');
				}
				else
				{
					array_push($debug_mass, "Добро пожаловать, $login");
				}
				break;





			case "to_reg": //РЕГИСТРАЦИЯ НОВОГО ПОЛЬЗОВАТЕЛЯ НАЧИНАЕТСЯ ЗДЕСЬ 
				$repeat_user = mysqli_query($connect, "SELECT * FROM users WHERE login = '$entered_login'");
				if ( mysqli_num_rows($repeat_user) > 0 )
				{
						array_push($debug_mass, 'Такой пользователь уже есть');
					}
					else
					{

						if ($_POST['password'] != $_POST['password_check'] ) 
						{
							array_push($debug_mass, 'Пароли не совпадают');
							
						}
						else
						{
							$result = mysqli_query($connect, "INSERT INTO `users` (`login`, `password`) VALUES ( '$entered_login' , '$entered_password') " );

						}
					}
									
			break; //РЕГИСТРАЦИЯ НОВОГО ПОЛЬЗОВАТЕЛЯ ЗАКАНЧИВАЕТСЯ ЗДЕСЬ ('{$_POST['login']}' , '{$_POST['password']}')");



		default:
			array_push($debug_mass, 'нихуя не работает');
			break;
		}
	
	}