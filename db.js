$('#submit').click(function(event) {
	event.preventDefault();
	$.ajax({
		url: 'db.php',
		method: 'post',
		data: $('#text').serialize(),
		success: function(data){
			alert('Данные успешно записаны в БД!');
		}
	});
});