<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>SMS</title>
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form method="POST">
		<input type="text" name="text" id="text" placeholder="Введите текст">
		<button type="submit" name="submit" id="submit">Сохранить</button><br>
		<div class="results">
			<span>Количество символов: 0</span><br>
			<span>Количество SMS: 0</span>
		</div>
		<input type="checkbox" name="translit" id="translit"><span class="checkbox_text">Транслитерировать</span>
		<br>
	</form>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="recount.js"></script>
	<script src="translit.js"></script>
	<script src="db.js"></script>
</body>
</html>