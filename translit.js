const checkbox = document.getElementById('translit')

checkbox.addEventListener('change', (event) => {
	if (event.target.checked) {
		let formData = $('#text').serialize();
		$.ajax({
			url: 'translit_cyrillic.php',
			type: "POST",
			data: formData,
			success: function(data) {
				$('#text').val(data);
			}
		});
	} else {
		let formData = $('#text').serialize();
		$.ajax({
			url: 'translit_latin.php',
			type: "POST",
			data: formData,
			success: function(data) {
				$('#text').val(data);
			}
		});
	}
})