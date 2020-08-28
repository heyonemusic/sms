$('#text').keyup(function(event) {
	event.preventDefault();
	$.ajax({
		url: 'recount.php',
		method: 'post',
		data: $(this).serialize(),
		success: function(data){
			$('.results').html(data);
		}
	});
});